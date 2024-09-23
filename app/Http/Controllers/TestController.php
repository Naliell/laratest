<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get_all(){

        $test = new Test();
        return view('messages', [
            'data' => $test->all(),
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Test::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Test::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testfield = $request->input('testfield');
        $testfield2 = $request->input('testfield2');
        $testfield3 = $request->input('testfield3');

        Test::update(['testfield' => $testfield, 'testfield2' => $testfield2, 'testfield3' => $testfield3]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Test::destroy($id);
    }
}
