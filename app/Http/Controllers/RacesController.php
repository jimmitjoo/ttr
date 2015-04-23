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

class RacesController extends Controller
{

    public function create()
    {
        return view('race.create');
    }

    public function store(CreateRaceRequest $request)
    {
        if ($request->hasFile('logo_src') && $request->file('logo_src')->isValid()) {
            $request->file('logo_src')->move(public_path() . '/uploads/images', time() . $request->file('logo_src')->getClientOriginalName());
        }


        if ($request->hasFile('cover_src') && $request->file('cover_src')->isValid()) {
            $request->file('cover_src')->move(public_path() . '/uploads/images', time() . $request->file('cover_src')->getClientOriginalName());
        }

        Race::create($request->all());

        return redirect(route('home'));
    }

}