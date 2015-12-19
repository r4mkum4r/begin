<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->group(['namespace' => 'Begin\Http\Controllers\Api\v1','prefix' => 'api/v1'], function ($app)
{
	$app->post('register','AuthController@postRegister');
	$app->post('login','AuthController@postLogin');
});

$app->group(['namespace' => 'Begin\Http\Controllers\Api\v1',
			 'prefix' => 'api/v1', 'middleware' => 'jwt.auth'], function ($app)
{	
	$app->get('validate_token', 'AuthController@validateToken');
	$app->get('tasks', 'TasksController@index');

});





