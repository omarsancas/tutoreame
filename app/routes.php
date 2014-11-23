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


Route::get('crear', function()
{
    $usuario = new User;
    $usuario->user_id = 'dulce@gmail.com';
    $usuario->password = Hash::make('123');
    $usuario->save();
});


Route::get('crearprofesores', function()
{
    $usuario = new User;
    $usuario->user_id = 'dulce@gmail.com';
    $usuario->password = Hash::make('123');
    $usuario->save();
});


Route::get('videollamada', function(){

    return View::make('videollamada');
});





Route::get('alumno', function()
{
    return View::make('usuario');
});


Route::post('alumno', [
    'as' => 'buscar',
    'uses' => 'HomeController@buscarMateria'
]);


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