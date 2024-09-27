<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FileController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('test', [TestController::class, 'index'])->name('test.index');
Route::get('test/{item}', [TestController::class, 'show'])->name('test.show');
Route::put('test/{item}', [TestController::class, 'update'])->name('test.update');
Route::delete('test/{item}', [TestController::class, 'destroy'])->name('test.destroy');

Route::put('test/file/make', [FileController::class, 'makeTestFile'])->name('test.file.make');
Route::get('test/file/get', [FileController::class, 'getTestFile'])->name('test.file.get');
Route::get('test/file/get/url', [FileController::class, 'getTestFileUrl'])->name('test.file.get.url');
