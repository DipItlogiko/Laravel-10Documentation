<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Closure;


class UserController3 extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, Closure $next) {
             
            if ($request->route()->named('profile')) { //// route ar nam jodi profile hoy tahole take redirect kore debe home route a
                return redirect('home'); // Redirect to 'home' route if condition is met
            }

            return $next($request);
        })->only(['index', 'show']); // Apply middleware only to 'index' and 'show' methods
    }

    public function index()
    {
        return 'this is index method from usercontroller3';
    }

    public function show()
    {
        return 'this is show method from usercontroller3';
    }

    // Other controller methods...
}




 
 
