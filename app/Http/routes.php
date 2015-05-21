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
Route::get('lopp/{runname}/{id}', ['as' => 'race', 'uses' => 'RunsController@show']);
Route::get('omoss', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('villkor', 'PagesController@terms');

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



Route::get('api/race/list/', 'RunsController@apiGetList');
Route::get('api/race/list/{query}', 'RunsController@apiGetList');
Route::get('api/race/page/', 'RunsController@apiGetPaginated');
Route::get('api/race/page/{query}', 'RunsController@apiGetPaginated');
Route::get('api/race/{id}', 'RunsController@apiGetById');
Route::get('api/organizer/{id}', 'OrganizersController@apiGetById');