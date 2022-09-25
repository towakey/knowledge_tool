<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {
    Route::post('register', 'RegisterController@register');
    Route::post('login', 'LoginController@login');
    
    Route::group(['middleware' => 'auth:api'], function () {
        Route::put('api_token', 'ApiTokenController@update');
    });
});


Route::group(['prefix' => 'v1'], function () {
    Route::resource('tweets', App\Http\Controllers\API\V1\TweetAPIController::class);
});
