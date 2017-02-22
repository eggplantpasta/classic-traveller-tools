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


// get list of characters
Route::get('v1/characters', 'Api\v1\CharacterController@index');
// create new characters
Route::post('v1/characters', 'Api\v1\CharacterController@store');

// get specific character
Route::get('v1/characters/{id}', 'Api\v1\CharacterController@show');
// update existing character
Route::put('v1/characters/{id}', 'Api\v1\CharacterController@update');
// delete a character
Route::delete('v1/characters/{id}', 'Api\v1\CharacterController@destroy');
