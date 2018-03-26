<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

    $api->get('user', 'App\Http\Controllers\UserController@index')->name('user');
    $api->get('users/{id}', 'App\Http\Controllers\UserController@show');

    $api->post('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

    $api->get('/parcels', 'App\Http\Controllers\ParcelController@index');
});
