<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 15-04-20
 * Time: 15:09
 */

namespace App\Http\Controllers;


use App\Http\Requests\CreateRaceRequest;
use App\Race;
use App\Run;

/**
 * Class RacesController
 * @package App\Http\Controllers
 */
class RacesController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('race.create');
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

        $race = Race::create($postArray);
        $runArray['race_id'] = $race->id;

        Run::create($runArray);

        dd($runArray);

        return redirect(route('home'));
    }

}