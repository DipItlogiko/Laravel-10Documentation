<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

class HomeController extends Controller
{
    public function sayHello()
   {
    return redirect()->action([BlogController::class, 'index']);
   }

    
}
