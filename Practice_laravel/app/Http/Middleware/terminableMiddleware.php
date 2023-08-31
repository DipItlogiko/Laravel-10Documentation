<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class terminableMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     */
    public function terminate(Request $request, Response $response): void ////opore response ta browser  a pathanor pore ai tuku execute hobe 
    {
        file_put_contents(__DIR__.'/abc.txt','Hello dip it\'s from terminate method'); ////akhane notun akta file create hobe app/Http/Middleware ar moddhe abc.txt name abong oi file ar content hobe  Hello dip it\'s from terminate method.
    }
}
