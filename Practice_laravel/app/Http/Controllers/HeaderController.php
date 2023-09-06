<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HeaderController extends Controller
{
   public function testHeader(Request $request)
   {

        //$value = $request->header(); ////header ar moddhe kiki thake ta amra aivabe dekhte pari
       //$value = $request->header('test-header'); //////akhane null return korbe karon amar header ar moddhe kono test-header name header nei
       //$value = $request->header('X-Header-Name', 'dip'); //////////akhne jodi header ar moddhe X-Header-Name name kono header na thake tahole  dip show korbe  
       //$token = $request->bearerToken();///// akane null value return korbe karon amra kono Authorization ee kori ni tai
       
       //dd($value);
       //dd($token);


        // if ($request->hasHeader('X-Header-Name')) { ///// akhane arma check korchi jodi X-Header-Name name kono header thake amader request ar moddhe tahole return korbe The header is present
        //     return 'The header is present';
        // }

        // return view('welcome');


    
   }
}
