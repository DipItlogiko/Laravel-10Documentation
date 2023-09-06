<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentNegotiationController extends Controller
{
 

    public function index(Request $request)
    {
        ///__ for /content-negotiation route __///

        //$contentTypes = $request->getAcceptableContentTypes(); /////// request je content type gulo accept kore tar akta array aikhae return korbe and $contentTypes ai variable ar moddhe store hoye jabe 

        //dd($contentTypes);

        if ($request->accepts(['text/html', 'application/json'])) {  /////contant type ar array accept kore accepts() method and aikhane return korbe true and code vetorer code execute korbe 
            dd('code Executated');
        }

        return view('welcome');
    } 

    public function dip(Request $request)
    {
        dd($request->all());
    }
}
