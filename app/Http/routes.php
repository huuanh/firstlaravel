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
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return (new Response('test new response in route ', 200))
        ->header('Content-Type', 'messenger')
        ->cookie('name', 'value');
});

Route::resource('task', 'TaskController');
Route::resource('users', 'UserController');
Route::post('task/create', 'TaskController@store');
Route::post('users/create', 'UserController@store');
Route::get('/', 'TaskController@index');

Route::get('/login', 'SessionController@login');
Route::post('/login', 'SessionController@doLogin');
Route::get('/logout', 'SessionController@logout');


//Settings: show form to create settings
Route::get( '/settings/new', array(
    'as' => 'setting.new',
    'uses' => 'SettingController@add'
) );

//Settings: create a new setting
Route::post( '/settings', array(
    'as' => 'setting.create',
    'uses' => 'SettingController@create'
) );