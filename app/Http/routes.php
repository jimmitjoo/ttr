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
Route::get('omoss', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('villkor', 'PagesController@terms');

Route::group(['prefix' => 'lopp'], function() {
    Route::get('skapa', ['as' => 'createRace', 'uses' => 'OrganizersController@create']);
    Route::post('/', ['as' => 'saveRace', 'uses' => 'OrganizersController@store']);
    Route::get('{runname}/{id}', ['as' => 'race', 'uses' => 'RunsController@show']);
});

Route::group(['prefix' => 'pass'], function(){
    Route::get('skapa', ['as' => 'createTraining', 'uses' => 'RunsController@create']);
    Route::post('/', ['as' => 'saveTraining', 'uses' => 'RunsController@store']);
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('partials/race-list', 'OrganizersController@listRaces');


Route::get('profil/{id}', ['as' => 'profile', 'uses' => 'UsersController@show']);


Route::get('login/facebook', 'UsersController@facebook');
Route::get('connect/facebook', 'UsersController@facebook');
Route::get('receive/facebook', 'UsersController@receive_facebook');


Route::get('indexing', 'OrganizersController@apiCreateRequest');


Route::get('villkor', 'PagesController@terms');

Route::group(['prefix' => 'api'], function() {
    Route::get('race/list/', 'RunsController@apiGetList');
    Route::get('race/list/{query}', 'RunsController@apiGetList');
    Route::get('race/page/', 'RunsController@apiGetPaginated');
    Route::get('race/page/{query}', 'RunsController@apiGetPaginated');
    Route::get('race/{id}', 'RunsController@apiGetById');

    Route::get('organizer/{id}', 'OrganizersController@apiGetById');

    Route::post('user', 'UsersController@store');
    Route::get('user/{id}', 'UsersController@getById');
    Route::get('user/email/{email}', 'UsersController@getByEmail');
    Route::get('user/facebook/{id}', 'UsersController@getByFacebookProviderId');

    Route::post('location/create', 'LocationsController@store');
    Route::get('location/{id}', 'LocationsController@getById');
});