<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function show(Request $request)
   {
      return $request->id;
   }

   public function store()
   {
    return 'this is store method of ordercontroller';
   }
}
