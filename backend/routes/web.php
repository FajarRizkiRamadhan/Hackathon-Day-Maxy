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
use Illuminate\Support\Facades\View;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//route untuk menampilkan view home
$router->get('/', function()
{
    return View::make('home');
});
$router->group(['prefix' => 'auth'], function () use ($router) {
    //rute untuk login
    $router->post('login', 'AuthController@login');

    //rute untuk logout
    $router->post('logout', 'AuthController@logout');
});
//rute untuk register
$router->post('/register', 'UserController@register');

//rute middleware untuk memastikan user yang mengakses sudah login
$router->group(['middleware' => 'auth.api'], function () use ($router) {
    $router->get('/users', 'UserController@getDataUser');
    $router->get('/users/{id}', 'UserController@getDataUserById');
    $router->patch('/users/{id}', 'UserController@updateDatUser');
    $router->delete('/users/{id}', 'UserController@deleteDataUser');
});
