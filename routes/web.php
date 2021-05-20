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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function ($router) {
    $router->post('/add', 'ConteudoController@add');
    $router->post('/update', 'ConteudoController@update');
    $router->delete('/delete/{id}', 'ConteudoController@delete');
    $router->get('/find/{id}', 'ConteudoController@find');
    $router->get('/list', 'ConteudoController@findAll');
});

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});
