<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', 'App\Http\Controllers\HelloController@index')->name('hello');
Route::get('/hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('/hello/json', 'App\Http\Controllers\HelloController@json');
Route::get('/hello/json/{id}', 'App\Http\Controllers\HelloController@json');



Route::get('/', function () {
    return view('welcome');
});
