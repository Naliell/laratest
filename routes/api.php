<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('test', [TestController::class, 'index'])->name('test.index');
Route::get('test/{item}', [TestController::class, 'show'])->name('test.show');
Route::put('test/{item}', [TestController::class, 'update'])->name('test.update');
Route::delete('test/{item}', [TestController::class, 'destroy'])->name('test.destroy');
