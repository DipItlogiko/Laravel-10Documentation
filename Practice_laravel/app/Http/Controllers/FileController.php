<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function show()
    {
        $pathToFile='pdf/dip.jpg'; ///// pdf folder is located into the public folder
        
        return response()->file($pathToFile); ///// akhane browser a amra ai file take dekhte pabo
    }


    public function show2()
    {
        $pathToFile = 'pdf/dip.jpg'; ///// pdf folder is located into the public folder
        
        $headers = [ ///// associative array
            'Content-Type' => 'application/jpg',
            'Content-Disposition' => 'hello dip',
        ];

        return response()->file($pathToFile, $headers);  ////// akhane amar file sora sori download hoye jabe ami browser a dekhte pabo na picture ta... ai url a hit korle sorasori image ta download hoye jabe 
    }
}
