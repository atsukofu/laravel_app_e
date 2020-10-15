<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello/index', 'App\Http\Controllers\HelloController@index');
Route::get('/hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('/sample', 'App\Http\Controllers\Sample\SampleController@index')->name('sample');



Route::get('/', function () {
    return view('welcome');
});
