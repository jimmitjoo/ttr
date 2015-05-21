<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller {

    /**
     * @return Socialize
     */
    public function facebook()
    {
        return Socialite::with('facebook')->scopes(['email', 'user_location'])->redirect();
    }

    /**
     * @return Redirect
     */
    public function receive_facebook()
    {
        $socialUser = Socialite::with('facebook')->user();

        if (!Auth::check()) {
            $user = User::socialUser($socialUser);
            Auth::login($user);

            return Redirect::to('/');
        }

        $user = User::connectFacebook($socialUser);

        return Redirect::back();

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::find($id);

		return view('user.show')->with(['user' => $user]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
