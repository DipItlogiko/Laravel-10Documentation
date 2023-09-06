<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function handleJsonRequest(Request $request)
   {
        if ($request->isMethod('post')) {
            // Access JSON data using "dot" syntax
            $name = $request->input('user.name');

            // Perform actions with the $name variable (e.g., return it as a response)
            return response()->json(['name' => $name]);
        }

        return view('json-form');
   }

}
