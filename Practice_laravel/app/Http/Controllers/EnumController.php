<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Enums\Permition ;
 


class EnumController extends Controller
{

    public function test()
    {
        return view('permission');
    }
    public function postData(Request $request)
    {    
        $status = $request->enum('dropdown1', Permition::class); ////// dropdown1 aita hocche amra form ar input field ar name ar value and Permition::class aita hocche amr enum class  jeita ami  amar app/Enums ar moddhe create korechi
        
        if ($status === Permition::APPROVED) {
            return 'you are Approved';
        } elseif ($status === Permition::REJECTED) {
            return 'you are rejected';
        } else {
            return 'you are pending';
        }

     
   }

}
