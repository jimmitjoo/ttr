<?php namespace App\Http\Controllers;

use App\Run;

class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('guest');
    }*/

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
<<<<<<< HEAD

        $races = Race::all();
=======
        $races = Run::all();
>>>>>>> 922f537e3f97b6c8bc9b2b70ab54d1b5220040b1

        return view('welcome')->with(['races' => $races]);
    }

}
