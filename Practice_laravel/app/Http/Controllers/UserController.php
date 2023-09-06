<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexAction(Request $request)
  {      
    $name = $request->input('name');
    return view('user.index',['name'=>$name]);
  
  }

  public function form()
  {     
    return view('user.form');
  }

}
