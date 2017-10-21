<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@Index');
Route::get('/lobby', 'MainController@ShowLobby');
Route::get('/game', 'MainController@ShowGame');

Route::post('/join', 'MainController@JoinParty');
Route::post('/madlib', 'MainController@SubmitMadLib');
