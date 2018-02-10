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
Route::get('/','Dashboard@index');
Route::resource('cleaner','CleaningController');
Route::resource('flat', 'FlatController');
Route::resource('register','RegisterController');
Route::get('registers/{id}','CleaningController@getRegisters');
Route::get('flats/{id}','FlatController@getRegister');
