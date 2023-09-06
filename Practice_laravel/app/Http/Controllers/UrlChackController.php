<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlChackController extends Controller
{
    public function Request()
    {
        return view('request1');
    }

    public function postdata(Request $request)
    {
       //$url = $request->url();    /////url() method amader akta url return korbe queary string chara
       //$urlWithQueryString = $request->fullUrl();    ////fullUrl() method oooo amader akta url return kore queary string ar sathe
       //$withqueary= $request->fullUrlWithQuery(['type' => 'phone']);
       //$without = $request->fullUrlWithoutQuery(['phon']);
    
       //dd($url);
       //dd($urlWithQueryString);
       //dd($withqueary);
       //dd($without);
          
       //$host = $request->host();  /////akhane amra host ta dekhte pabo jemon localhost ba 127.0.0.1
       //$httpHost = $request->httpHost(); ///////akhane amra httpHost dekhte pabo jemon 127.0.0.1:8000
        //$SaH = $request->schemeAndHttpHost(); //// akhane amra dekte pabo http://127.0.0.1:8000

       //dd($host);
       //dd($httpHost);
       //dd($SaH);
    }
}
