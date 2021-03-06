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
    return view('welcome');
});

Auth::routes();

Route::get('/home','HomeController');
Route::get('/post/{laman}',['uses'=>'PostController@post']);

Route::get('/tulis','TulisController@index');
Route::post('/tulis/create','TulisController@create');

Auth::routes();
