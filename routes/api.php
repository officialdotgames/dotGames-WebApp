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

Route::post('/create/party', 'ApiController@CreateParty');
Route::post('/join', 'ApiController@JoinParty');
Route::get('/party/{id}/poll', 'ApiController@PollParty');
Route::post('/party/start', 'ApiController@StartParty');

Route::get('/madlib', 'ApiController@ReadMadlib');


