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

    $user = Socialize::with('facebook')->user();

    $user->save();

    dd($user);
    return Socialize::with('facebook')->user();

});