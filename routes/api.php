<?php

use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
use CloudCreativity\LaravelJsonApi\Routing\ApiGroup as Api;
use Illuminate\Http\Request;

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

JsonApi::register('default', ['namespace' => 'Api'], function (Api $api, $router) {
    $api->resource('user', [
        'has-one' => 'wallet',
    ]);
    $api->resource('money', [
        'has-one' => ['currency', 'wallet']
    ]);
    $api->resource('currency', [
        'has-many' => 'money'
    ]);
    $api->resource('wallet', [
        'has-one' => 'user',
        'has-many' => 'money'
    ]);
});