<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/products', 'ProductController@index');
$router->get('/products/{id}', 'ProductController@show');
$router->post('/products/create', 'ProductController@store');
$router->put('/products/update/{id}', 'ProductController@update');
$router->delete('/products/delete/{id}', 'ProductController@destroy');

$router->get('/stemming', 'StemmingController@StemmingAlgo');

$router->get('/', function () use ($router) {
    return $router->app->version();
});
