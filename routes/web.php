<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/all', 'App\Http\Controllers\TestController@get_all')->name('get_all');
