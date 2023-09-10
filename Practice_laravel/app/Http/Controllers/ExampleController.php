<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleMethod()
    {
        $content = 'Hello, World!';
        $type = 'text/plain';

        //   return response($content) ///// amra jodi chai je amader respose ta shudhu body tei show hok tahole amra ai vabe likhbo ak line a

        //     ->header('Content-Type', $type)  ////// jodi amra amader response ke header ar moddhe pass korte chai tahole amra ai vabe likhte pari...header ar moddhe amra key value akare respose pass korte pari jemon 'Content-Type' hocche akta key and $type hocche akta value... key ar nam ami ja khushi dite pari... aita amra post man ar maddhome check korte pari
        //     ->header('X-Header-One', 'Header Value One')
        //     ->header('X-Header-Two', 'Header Value Two');


        ////////// OR----------------------------------
        
        return response($content)
        ->withHeaders([
            'Content-Type' => $type,
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value',
        ]);
    }
}
