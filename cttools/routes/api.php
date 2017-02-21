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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('v1/characters', function () {
    return 'v1/characters';
});

Route::post('v1/characters', function () {
    return 'post v1/characters';
});

Route::get('v1/characters/{id}', function ($id) {
    return 'v1/characters '.$id;
});

Route::put('v1/characters/{id}', function ($id) {
    return 'put v1/characters '.$id;
});

Route::delete('v1/characters/{id}', function ($id) {
    return 'delete v1/characters '.$id;
});
