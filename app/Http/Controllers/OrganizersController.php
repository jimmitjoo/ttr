<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 15-04-20
 * Time: 15:09
 */

namespace App\Http\Controllers;


use App\Http\Requests\CreateRaceRequest;
use App\Organizer;
use App\Run;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
/**
 * Class OrganizersController
 * @package App\Http\Controllers
 */
class OrganizersController extends Controller
{

    public function apiGetById(Request $request, $id)
    {
        $json = Organizer::where('id', '=', $id)->first();
        return response()->json($json)->setCallback($request->input('callback'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('race.create');
    }

    public function apiCreateRequest()
    {
        $urlToAPI = 'https://api.import.io/store/data/0f84af0c-d513-4d0a-a7cd-c4a54ded750e/_query?input/webpage/url=http%3A%2F%2Fspringlfa.se%2Floparkalendern-2015%2F&_user=6ae0010d-95e5-48dc-903f-ce0f776ef316&_apikey=6ae0010d-95e5-48dc-903f-ce0f776ef316%3AjMpImDJnkAieknP%2Bau7svOGNJYjqEhiL7N6EbwJgHKVfD0eYmRm5HaFA%2Bn3BeX8pmEnLrh6djBNw%2B95RBS1IJg%3D%3D';

        $client = new \GuzzleHttp\Client();

        $response = $client->get($urlToAPI);

        $body = $response->getBody()->getContents();

        $result = json_decode($body);

        $result = (array) $result->results;

        $sweDays = ['måndag', 'tisdag', 'onsdag', 'torsdag', 'fredag', 'lördag', 'söndag'];
        $months = [
            'januari' => 'jan',
            'februari' => 'feb',
            'mars' => 'mar',
            'april' => 'apr',
            'maj' => 'may',
            'juni' => 'jun',
            'juli' => 'jul',
            'augusti' => 'aug',
            'september' => 'sep',
            'oktober' => 'oct',
            'november' => 'nov',
            'december' => 'dec'
        ];

        $runI = 0;
        $run = [];

        foreach ($result as $q) {

            $organizer = [];

            foreach ($q as $x => $v) {

                if (is_array($v)) $v = $v[0];
                if ($x == 'tilltoppen_label' && !empty($v) || !empty($q->value_1) || !isset($q->value_3)) continue;

                /*
                 * Fix dates
                 */
                if ($x == 'content') {

                    for ($i=0;$i<count($sweDays);$i++) {
                        $v = str_replace($sweDays[$i], '', $v);
                    }
                    foreach ($months as $swe => $eng) {
                        $v = str_replace($swe, $eng, $v);
                    }
                    //echo date('Y-m-d', strtotime($v . ' 2015')).'<br />';

                    $organizer['date'] = date('Y-m-d', strtotime($v . ' 2015'));

                }
                /*
                 * Fix lengths
                 */
                elseif ($x == 'value_2') {

                    if (strpos($v, '–') !== false) {
                        $length = explode('–', $v);
                    } elseif (strpos($v, '-') !== false) {
                        $length = explode('-', $v);
                    } else {
                        $length = [$v];
                    }

                    for ($i=0;$i<count($length);$i++) {

                        if (strpos($length[$i],'km')) {
                            $length[$i] = (preg_replace("/[^0-9,.]/", "", $length[$i])) * 1000;
                        } elseif (strpos($length[$i],'m')) {
                            $length[$i] = preg_replace("/[^0-9,.]/", "", $length[$i]);
                        } else {
                            $length[$i] = (preg_replace("/[^0-9,.]/", "", $length[$i])) * 1000;
                        }

                    }

                    $organizer['length'] = $length;
                    //print_r($length);


                } elseif ($x == 'value_3') {

                    $tarr = explode('/', $v);
                    $v = (!empty($tarr[0])) ? $tarr[0] : $v;
                    //echo $x .' : ' . $v . '<br />';

                    $organizer['town'] = $v;

                } elseif ($x == 'links/_text') {

                    $organizer['name'] = $v;

                } elseif ($x == 'value_4') {

                    $organizer['organizer'] = $v;

                } elseif ($x == 'links') {

                    $organizer['external_link'] = $v;

                } else {

                    //echo $x .' : ' . $v . '<br />';
                }

            }

            if (count($organizer) > 0 && strtotime($organizer['date']) > time()) $run[] = $organizer;

        }


        for ($i=0;$i<count($run);$i++) {

            /*$request = new CreateRaceRequest();

            for ($x=0;$x<count($run[$i]['length']);$x++) {
                if (isset($run[$i]['organizer'])) $request['name'] = $run[$i]['organizer'];
                if (isset($run[$i]['town'])) $request['town'] = $run[$i]['town'];
                if (isset($run[$i]['external_link'])) $request['external_link'] = $run[$i]['external_link'];
                if (isset($run[$i]['name'])) $request['run_name'] = $run[$i]['name'] . ' ' . round($run[$i]['length'][$x]/1000, 2) . ' km';
                if (isset($run[$i]['length'])) $request['run_distance'] = $run[$i]['length'][$x];
                if (isset($run[$i]['date'])) $request['run_start_datetime'] = $run[$i]['date'];
            }

            $this->store($request);
            */

            if (
                !isset($run[$i]['organizer']) ||
                !isset($run[$i]['town']) ||
                !isset($run[$i]['external_link']) ||
                !isset($run[$i]['name']) ||
                !isset($run[$i]['length']) ||
                !isset($run[$i]['date'])
            ) {
                continue;
            }

            $organizer = Organizer::firstOrCreate([
                'name' => $run[$i]['organizer']
            ]);
            $organizer->save();

            for ($x=0;$x<count($run[$i]['length']);$x++) {

                $rrr = new Run;
                $rrr->organizer_id = $organizer->id;
                $rrr->name = $run[$i]['name'] . ' ' . round($run[$i]['length'][$x] / 1000, 2) . 'km';
                $rrr->town = $run[$i]['town'];
                $rrr->distance = $run[$i]['length'][$x];
                $rrr->start_datetime = $run[$i]['date'];
                $rrr->external_link = $run[$i]['external_link'];

                $cRun = Run::where('name', '=', $run[$i]['name'] . ' ' . round($run[$i]['length'][$x] / 1000, 2) . 'km')
                            ->where('start_datetime', '=', $run[$i]['date'])->first();

                if (!$cRun) $rrr->save();

                /*dd($rrr);

                $cRun = Run::firstOrCreate([
                    'organizer_id' => $organizer->id,
                    'name' => $run[$i]['name'] . ' ' . round($run[$i]['length'][$x] / 1000, 2) . 'km',
                    'town' => $run[$i]['town'],
                    'distance' => $run[$i]['length'][$x],
                    'start_datetime' => $run[$i]['date'],
                    'external_link' => $run[$i]['external_link']
                ]);
                $cRun->save();

                dd($cRun);
                */
            }

        }

        return;

        $body = json_encode($body);
        $result = json_decode($body);

        dd($result);

        foreach ($result as $key => $value) {
            echo $value.'<br>';
        }


    }

    /**
     * @param CreateRaceRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateRaceRequest $request)
    {
        if ($request->hasFile('logo_src') && $request->file('logo_src')->isValid()) {
            $filename = time() . $request->file('logo_src')->getClientOriginalName();
            $request->file('logo_src')->move(public_path() . '/uploads/images', $filename);
        }


        if ($request->hasFile('cover_src') && $request->file('cover_src')->isValid()) {
            $filename = time() . $request->file('cover_src')->getClientOriginalName();
            $request->file('cover_src')->move(public_path() . '/uploads/images', $filename);
        }

        $postArray = $request->all();
        $runArray = [];

        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'run_') !== false) {
                unset($postArray[$key]);

                $runKey = str_replace('run_', '', $key);

                $runArray[$runKey] = $value;
            }
        }

        //dd($runArray);
        //dd($postArray);

        $organizer = Organizer::create($postArray);
        $runArray['organizer_id'] = $organizer->id;

        Run::create($runArray);

        //return redirect(route('home'));
    }


    public function listRaces()
    {
        $races = Run::where('start_datetime', '>', date('Y-m-d'))->with('organizer')->paginate(15);

        return view('race.list')->with(['races' => $races]);
    }

}