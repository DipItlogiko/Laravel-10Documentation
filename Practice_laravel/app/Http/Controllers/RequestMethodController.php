<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestMethodController extends Controller
{
    public function postdata(Request $request)
    {
        $method = $request->method(); ////akhane ami request theke je method ta ashche oi  method take akata variable ar moddhe store korechi

        if ($request->isMethod('post')) { ///// akhane ami akta chack korechi jodi amader request theke asha request method ta jodi post hoy tahole ooo niche ai string ta print korbe  
            return 'Yes it\'s a POST request'; 
        }

        return 'it\'s not a POST request'; //// jodi post request na hoy tahole ai ta dekhbe 
    }
}
