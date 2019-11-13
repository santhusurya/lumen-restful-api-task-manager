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

use App\Http\Controllers\ProjectController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// $router->resource('projects', 'ProjectController');


$router->get('/projects', 'ProjectController@index');

$router->post('/projects', 'ProjectController@store');

$router->put('/projects', 'ProjectController@update');

$router->delete('/projects/{id}', 'ProjectController@destroy');

$router->get('/projects/search/{searchType}/{searchText}', 'ProjectController@search');