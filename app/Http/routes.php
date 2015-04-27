<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('hem', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('lopp/skapa', ['as' => 'createRace', 'uses' => 'RacesController@create']);
Route::post('lopp', ['as' => 'saveRace', 'uses' => 'RacesController@store']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('login/facebook', function(){

    return Socialize::with('facebook')->scopes(['email'])->redirect();

});

Route::get('/receive/facebook', function(){

    $socialUser = Socialize::with('facebook')->user();

    dd($socialUser);

    if (!User::where('email', $socialUser->email) && !User::where('facebook_provider_id', $socialUser->id)) {
        $user = User::create([
            'name' => $socialUser->name,
            'email' => $socialUser->email,
            'facebook_provider_id' => $socialUser->id,
            'avatar' => $socialUser->avatar
        ]);

        echo 'användare skapad';

        dd($user);

        Auth::login($user);

        return Redirect::to('/');
    }

    $user = User::where('email', $socialUser->email);
    if (!$user) $user = User::where('facebook_provider_id', $socialUser->id);

    $user->facebook_provider_id = $socialUser->id;

    echo 'existerande användar provider satt';

    dd($user);

    Auth::login($user);

    return Redirect::to('/');


    return $user->email;

    dd($user);
    return Socialize::with('facebook')->user();

});