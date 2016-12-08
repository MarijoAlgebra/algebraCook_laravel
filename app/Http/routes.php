<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {

	//Generira rute za autentifikaciju
    Route::auth();

    // vodi korisnika na pocetnu stranicu
	Route::get('/', function () { return view('welcome'); });

	// vodi na pogled akciju index home controllera
    Route::get('/recipes', 'RecipesController@index');

    Route::get('/recipes/add', 'RecipesController@add');
    Route::post('/recipes/add', 'RecipesController@save');

    Route::get('/recipes/view/{id}', 'RecipesController@view');

    Route::get('/recipes/edit/{id}', 'RecipesController@edit');
    Route::post('/recipes/edit', 'RecipesController@update');

    Route::get('/profil', 'UsersController@profil');
    Route::post('/profil', 'UsersController@profil');
});
