<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function makeTestFile() {
        Storage::put('public/test2.txt', 'Hello, World!');

        return Storage::url('test2.txt');
    }

    public function getTestFile() {
        return Storage::get('public/test2.txt');
    }
}
