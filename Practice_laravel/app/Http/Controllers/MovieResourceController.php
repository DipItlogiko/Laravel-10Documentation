<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return 'create method from MovieResourceController';
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
    public function show()
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return 'edit method from MovieResourceController';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        return 'update method from MovieResourceController';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function popular()
    {
        return 'popular';
    }
}
