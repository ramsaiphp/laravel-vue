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

Route::get('registration', 'RegistrationController@index');
Route::get('users', 'RegistrationController@users');
Route::delete('deleteusers/{id}', 'RegistrationController@delete');
Route::post('create', 'RegistrationController@insert');