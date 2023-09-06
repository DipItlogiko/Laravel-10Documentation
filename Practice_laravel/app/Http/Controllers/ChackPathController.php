<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChackPathController extends Controller
{
    ////__Request mathod__////
    public function Request(){
        return view('request');
    }

    ////__Postdata mathod__////
    public function Postdata(Request $request){
      
    //dd($request->path()); ///data gulo amra kon route theke pacchi ta browser a dekhar jonno
     
    //////////// Inspecting The Request Path / Route

    // if ($request->is('postdata/*')) { //// akhane check korchi jodi amader request path ba url /postdata hoy tahole admin return korbe postdata/* ai /* mane hocche amar ai slash ar por jai thak na keno jodi eemon kono path request a aashe tahole amdin return korbe 
    //     return 'admin';
    // }
    
    // return 'You are not allowed';


    ///// OR

    // if ($request->routeIs('postdata.*')) { //////akhane amra check korchi jodi amarder route name postdata . diye shuru hoy and  . ar por ja khushi thakte pare proble nei tahoei she admin return korbe 
    //     return 'admin';
    // }

    // return 'You are not allowed';

  }

}  
