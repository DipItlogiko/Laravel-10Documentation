<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController2 extends Controller
{
    
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('auth'); ///// jodi ami  amar ai controller a joto gulo method ache sob gulo methode ai auth middleware apply korte chai tahole ai vabe likhbo
        
        $this->middleware('auth')->only('index','store'); ////// akhane only() ar moddhe jei method gulo ar nam dibo shudhu oi method gultei middleware apply hobe onno gulo te hobe na
        //$this->middleware('auth')->except('store'); /////// akhane except() ar moddhe jei method ar nam diye debo oi method a middleware apply hobe na
    }

    public function index()
    {
        return 'i am index method!!!!';
    }

    public function store()
    {
        return 'i am store method!!!';
    }

    public function use()
    {
        return 'i am use method';
    }


   
}
