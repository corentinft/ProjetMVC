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
Route::resource('contact', 'ContactController');

Route::resource('order', 'OrderController');

Route::get('article/all', 'PostController@all');

Route::get('article/{id}', 'PostController@id');

Route::get('/', function () {
    return view('home');
});
