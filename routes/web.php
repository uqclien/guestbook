<?php

use App\Entry;

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
Route::get('/', function () {
    return View::make('home');
});

Route::get('/entries', 'EntriesController@getEntries');

Route::get('/entries/{id}', 'EntriesController@getEntry');

Route::post('/', 'EntriesController@postEntry');
