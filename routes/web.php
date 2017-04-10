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

Route::get('/entries', function () {
    return View::make('entries')->with('entries', Entry::paginate(10));
});

Route::get('/', function () {
    return View::make('home');
});

Route::post('/', 'EntriesController@postEntry');
