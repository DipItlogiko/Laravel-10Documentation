<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPController extends Controller
{
    public function getIP(Request $request)
    {
        $ipAddress = $request->ip(); ////// akhane amra request theke ip ta ke dhore $ipAddress ar moddhe store kore diyechi

        return view('ip',['ipAddress' => $ipAddress]); /////// akhan theke $ipAddress variable ta  pass korechi ipAddress name aaa ip.blade.php ar moddhe
    } 
}
