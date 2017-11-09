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


Route::get('/create','PostController@create');
Route::post('store','PostController@store');
Route::get('show','PostController@show');
Route::post('delete','PostController@delete');
Route::get('get_data','PostController@get_data');
Route::post('update','PostController@update');

