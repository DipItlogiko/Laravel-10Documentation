<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AfterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request); //// amader kono request ashle akhan theke request ta amader server a chole jabe sora sori tar por nicher action gulo perform korbe

        ///// akhane ami jei action gulo perform korate chacchi request ta server a pathanor por ta likhbo
                
            ////  

        ////-----------------------------

        return $next($response);
    }
}
