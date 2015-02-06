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

Route::get('/', 'PageController@index');

Route::get('/dashboard', 'PageController@dashboard');

Route::get('/doc', 'PageController@doc');

Route::get('/stats', 'PageController@stats');

Route::get('/contact', 'PageController@contact');

Route::get('/privacy', 'PageController@privacy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
