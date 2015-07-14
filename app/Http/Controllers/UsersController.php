<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

        $authUserId = Auth::user()->id;
        $user = User::connectFacebook($socialUser, $authUserId);

        if (!$user) return 'Användaren har redan ett konto';

        return Redirect::to('/hem');

    }

    public function getById(Request $request, $id)
    {
        $json = User::find($id);
        return response()->json($json)->setCallback($request->input('callback'));
    }

    public function getByFacebookProviderId(Request $request, $id)
    {
        $json = User::where('facebook_provider_id', '=', $id)->first();
        return response()->json($json)->setCallback($request->input('callback'));
    }

    public function getByEmail(Request $request, $email)
    {
        $json = User::where('email', '=', $email)->first();
        return response()->json($json)->setCallback($request->input('callback'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return redirect('/');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
        dd($request);

		$user = User::where('email', '=', $request->input('email'));

        if (!$user) $user = User::where('username', '=', $request->input('username'));

        if (!$user) {
            $user = new User;

            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->gender = $request->input('gender');
            $user->town = $request->input('town');
            $user->password = Hash::make($request->input('password'));
            $user->save();

            return response()->json($user);
        } else {

            return 'wannabe!!';

        }


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
