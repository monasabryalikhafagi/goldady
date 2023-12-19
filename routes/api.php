<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::group(['middleware' => ["auth:api"]], function () {
        Route::get('golds', 'GoldController@index');
        Route::get('golds/{id}', 'GoldController@show');
        Route::post('golds/buy/{id}', 'GoldController@buy');

        Route::post('external-requset/{id}', 'UserController@ceateExternalRequset');
    });


