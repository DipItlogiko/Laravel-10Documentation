<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function postData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
        ]);
        
        dd($request);

       $data = $request->input('name');
       $request->session()->flash('name', $data);

        return redirect('test');
    }


  


    public function flashOnly(Request $request)
    {
        // Validate the input data (you can add your validation rules here)

        // If validation fails, redirect back with errors and input data
        $validated=$request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

          

        // Redirect back to the form with input data flashed to the session
        return redirect('test')->withInput();
    }


   
}
