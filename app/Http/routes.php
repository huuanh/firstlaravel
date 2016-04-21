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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('task', 'TaskController');
Route::resource('users', 'UserController');
Route::post('task/create', 'TaskController@store');
Route::post('users/create', 'UserController@store');
Route::get('/', 'TaskController@index');

Route::get('/login', 'SessionController@login');
Route::post('/login', 'SessionController@doLogin');
Route::get('/logout', 'SessionController@logout');