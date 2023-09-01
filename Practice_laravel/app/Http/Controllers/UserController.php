<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(int $id): View ////////akhane route theke asha id take dhora hoyeche
    {
        return view('profile', [
            'user' => User::findOrFail($id) ////Akhane User  model theke mane users table theke find kora hoyeche je amar url theke asha id ta ki users table a ache ki na jodi thake tahole user variable ar moddhe store hoye jabe and ai user variable take amra profile page access korte parbo
        ]);
    }

    public function test()
    {
        return view('test');
    }
    
     
}
