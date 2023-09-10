<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookiesController extends Controller
{
    public function index()
    {
        $minutes=60;

        return response('Hello World')->cookie(
            'dip', 'dipData', $minutes  ////// akhane ami akta response ar sathe cookie add kore diyechi cookie name hocche dip and value hocche dipData and minutes ta ami bole diyechi kotokhon por amar cookie tar meyad sesh hoye jabe   
        );
    }


    public function test()
    {
        $minutes = 60;  
        Cookie::queue('dibbo', 'dibbovalue', $minutes);

        return "Cookie 'name' has been set with the value 'value' for $minutes minutes.";
    }


    public function remove()
    {
        return response('Hello World')->withoutCookie('dip'); ////// akhane withoutCookie() method ta amader cookie ar meyad sesh hoyar aagei remove korte help kore ai withoutCookie() method ar moddhe cookie ar name bole dite hoy ami jei cookie ta remove korte chacchi akhane ami jemon bole diyechi ami dip name cookie ta remove korte chacchi 
    }
}
