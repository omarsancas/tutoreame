<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});



Route::get('alumno', function()
{
    return View::make('usuario');
});


/*
 * Sesiones para login
 * */

Route::get('login', [
    'as' => 'login',
    'uses' => 'SesionesController@create'
]);
Route::post('login', 'SesionesController@store');
Route::get('logout', 'SesionesController@destroy');
Route::resource('sesiones', 'SesionesController');