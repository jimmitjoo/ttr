<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 15-04-20
 * Time: 15:09
 */

namespace App\Http\Controllers;



use App\Http\Requests\CreateRaceRequest;

class RacesController extends Controller {

    public function create()
    {
        return view('race.create');
    }

    public function store(CreateRaceRequest $request)
    {
        return 'lol';
    }

}