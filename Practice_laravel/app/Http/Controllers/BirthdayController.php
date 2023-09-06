<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function index()
    {
        return view('birthday');
    }

    public function postData(Request $request)
    {
        //$birthday = $request->date('birthday'); //////date() ar moddhe ai birthday ta hocche amar form ar input field name ar value jemon name="birthday"
        
        //dd($birthday);

        $elapsed = $request->date('elapsed', '!H:i', 'Europe/Madrid');

        dd($elapsed);


    
    }
}
