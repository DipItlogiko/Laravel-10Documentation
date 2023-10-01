<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function paginate()
    {
        $users = DB::table('users')->paginate(2);
       
        return view('test',['users' => $users]);
        //return view('test',compact('users'));
        //return view('test')->with('users',$users);

    }

    public function bootstrap()
    {
        $users = DB::table('users')->paginate(2);
       
        return view('boot',['users' => $users]);
    }
}
