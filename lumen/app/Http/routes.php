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

$app->get('/', function () use ($app) {
    return $app->version();    
});

// Grupo para el uso del backend
$app->group(['prefix' => '/admin'], function () use ($app) {
	$app->post('/login', 'App\Http\Controllers\AdminController@login');
	
});
/*$app->group(['prefix' => '/admin'], function () use ($app) {
	$app->post('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\AdminController@login'
	], ["username"=>$username, "password"=>$password]);
	
});*/
//$app->post('/admin/login', ['uses' => 'App\Http\Controllers\AdminController@login']);
