<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        ///// akhane ami jei action gulo perform korate chacchi request ta server a pathanor aage ta likhbo
                
            ////  

        ////-----------------------------
        ///// oporer action gulo perform korar por amra request ta server a pathabo
        return $next($request); //// akhan theke request ta server a send hoy
    }
}
