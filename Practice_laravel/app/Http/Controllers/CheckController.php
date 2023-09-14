<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CheckController extends Controller
{
    public function showUser($userId) {
        $user = User::find($userId);  
        return view('check', ['user' => $user]);
        ////OR 
        //return view('your-view', compact('user'));
        ////OR
        //return view('your-view')->with('user', $user);
    }
}
