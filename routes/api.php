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

Route::get('/madlib', function() {
    return response()->json([
        'lines' => [
            'Be kind to your Dog-footed Carrots', 
            'For a duck may be somebody`s Jim Carrey,',
            'Be kind to your Carrots in Topeka',
            'Where the weather is always Tiny.',
            'You may think that this is the Nigel Thornberry,',
            'Well it is.'
        ]
    ]);
});


