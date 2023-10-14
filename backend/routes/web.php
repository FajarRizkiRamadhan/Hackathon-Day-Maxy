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

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/login', 'AuthController@login');
    $router->post('/logout', 'AuthController@logout');
});

$router->group(['prefix' => 'authapi'], function () use ($router) {
    $router->get('/users', 'UserController@getDataUser');
    $router->get('/users/{id}', 'UserController@getDataUserById');
    $router->put('/update/{id}', 'UserController@updateDataUser');
    $router->delete('/delete/{id}', 'UserController@deleteDataUser');
});

$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('/customers', 'CustomerController@allData');
    $router->get('/rooms', 'RoomsController@allData');
    $router->get('/rooms/{id}', 'RoomsController@detailData');
    $router->post('/rooms', 'RoomsController@addData');
    $router->put('/rooms/{id}', 'RoomsController@editData');
    $router->delete('/rooms/{id}', 'RoomsController@deleteData');
});

Route::group(['middleware' => 'auth'], function () {
    // Daftar rute yang memerlukan otentikasi di sini
});
    
$router->group([ 'prefix' => 'building'], function () use ($router){
    $router->get('/showallbuilding', 'BuildingController@showallbuilding');
    $router->get('/showidbuilding', 'BuildingController@showidbuilding');
    $router->post('/addbuilding', 'BuildingController@addbuilding');
    $router->get('/showbuild/{id}', 'BuildingController@show');
    $router->put('/updatebuild/{id}', 'BuildingController@update');
    $router->delete('/deletebuild/{id}', 'BuildingController@delete');
});
$router->post('/register', 'RegisterController@register');
$router->post('/uploadfoto', 'RoomsController@uploadFoto');
// $router->group(['prefix' =>'Customer'], function() use($router){
//     $router->get('/', 'RegisterController@allData');
// });