<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiResourceController2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Index method from ApiResourceController2';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Show method from ApiResourceController2';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
