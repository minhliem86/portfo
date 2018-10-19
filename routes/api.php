<?php

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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',['namespace'=>'App\Modules\Api\Controllers', 'middleware'=>'cors'], function ($api){
    $api->post('/register','AuthController@register');
    $api->post('/auth','AuthController@authenticate');
    $api->post('/logout', 'AuthController@logout');
    $api->get('/refresh-token', 'AuthController@getToken');
    $api->get('/authUser', 'AuthController@authenticatedUser');
});

$api->version('v1', ['namespace'=>'App\Modules\Api\Controllers', 'middleware'=> 'jwt.auth|cors'],function($api){
   $api->get('/skill', 'SkillController@index');
});

