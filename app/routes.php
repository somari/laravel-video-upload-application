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
	return View::make('hello');
});

Route::controller('password', 'RemindersController');

Route::post('user_register', ['as' => 'user_register', 'uses' => 'UsersController@register']);

Route::post('user_login', ['as' => 'user_login', 'uses' => 'UsersController@authenticate']);

Route::post('user_reset', ['as' => 'user_reset', 'uses' => 'UsersController@reset']);

Route::get('user_logout', ['as' => 'user_logout', 'uses' => 'UsersController@logout']);