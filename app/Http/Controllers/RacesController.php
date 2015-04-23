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

        Race::create($request->all());

        return redirect(route('home'));
    }

}