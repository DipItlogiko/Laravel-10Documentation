<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function index()
    {
        if (View::exists('emails.customer')) { ///// akhne View ta hocche akta fachad's and amra view ar exists() method ta bebohar korechi aita check korar jonno je amar exists() method ar moddhe je view file ar nam ta ache oita ki amar resources/view ar moddhe ache ki na jodi thake tahole ooo true return korbe and if ar moddhe dhukbe and return kore debe 
            return 'view page is exists';
        }

      return response('view page is not exists');
    }
}
