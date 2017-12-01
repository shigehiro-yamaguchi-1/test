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



Route::group(['middleware' => 'api'], function () {
    /*
    |--------------------------------------------------------------------------
    | 1) User 認証不要
    |--------------------------------------------------------------------------
    */
    Route::post('authenticate',  'AuthenticateController@authenticate');

    /*
    |--------------------------------------------------------------------------
    | 2) User ログイン後
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('me',  'AuthenticateController@getCurrentUser');
        Route::get('logout',  'AuthenticateController@logout')->middleware('jwt.refresh');
    });
});
