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

Route::get('/', function () {
    return view('layouts/master');
});

Route::get('/posts', 'PostController@index')->name('home');
Route::get('/causes', 'CauseController@index');
Route::get('/causes/create', 'CauseController@create');
