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

use App\User;

Route::get('/', 'WelcomeController@index');

Route::get('hem', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('lopp/skapa', ['as' => 'createRace', 'uses' => 'OrganizersController@create']);
Route::post('lopp', ['as' => 'saveRace', 'uses' => 'OrganizersController@store']);
//Route::post('lopp/{id}', ['as' => 'getRace', 'uses' => 'RunsController@show']);
Route::get('lopp/{runname}/{id}', ['as' => 'race', 'uses' => 'RunsController@show']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('partials/race-list', 'OrganizersController@listRaces');

Route::get('profil/{id}', ['as' => 'profile', 'uses' => 'UsersController@show']);

Route::get('login/facebook', function(){
    return Socialize::with('facebook')->scopes(['email'])->redirect();
});

Route::get('receive/facebook', function(){

    $socialUser = Socialize::with('facebook')->user();
    $user = User::socialUser($socialUser);

    Auth::login($user);

    return Redirect::to('/hem');

});

Route::get('indexing', 'OrganizersController@apiCreateRequest');