<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', 'App\Http\Controllers\HelloController@index');
Route::post('/hello', 'App\Http\Controllers\HelloController@index');



Route::get('/', function () {
    return view('welcome');
});
