<?php

use App\Character;
use App\Http\Resources\Character as CharacterResource;
use App\Http\Resources\CharacterCollection;
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
// Route::get('v1/characters', 'Api\v1\CharacterController@index');

Route::get('v1/characters', function () {
    return new CharacterCollection(Character::all());
});

// create new characters
Route::post('v1/characters', 'Api\v1\CharacterController@store');
// Error: 405
// TODO: error stub - replace with implementation
// Route::put('v1/characters', function () {
//     return response('Error: 405', 405);
// });
// Error: 405
// TODO: error stub - replace with implementation
// Route::put('v1/characters', function () {
//     return response('Error: 405', 405);
// });

// get specific character
// Route::get('v1/characters/{id}', 'Api\v1\CharacterController@show');
Route::get('v1/characters/{id}', function ($id) {
    return new CharacterResource(Character::find($id));
});

// Error: 405
// TODO: error stub - replace with implementation
Route::post('v1/characters/{id}', function () {
    return response('Error: 405', 405);
});
// update existing character
Route::put('v1/characters/{id}', 'Api\v1\CharacterController@update');
// delete a character
Route::delete('v1/characters/{id}', 'Api\v1\CharacterController@destroy');

// Error: 404
// TODO: error stub - replace with implementation
Route::fallback(function () {
    return response('Error: 404', 404);
});
