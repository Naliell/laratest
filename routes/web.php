<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/all', 'App\Http\Controllers\TestController@getAll')->name('getAll');
