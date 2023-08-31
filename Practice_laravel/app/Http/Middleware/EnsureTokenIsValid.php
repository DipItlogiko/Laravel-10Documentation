<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('token') !== 'my-secret-token'){ ////// akhane amader jodi $request->input('token') and 'my-secret-token' jodi soman na hoy tahole hobe a rederect korbe
            
            return redirect('home');////// home ta hocche amar route ar url 
        }
        return $next($request); /////// jodi $request->input('token') and 'my-secret-token' soman hoy tahole next request a jabe 
    }
}
