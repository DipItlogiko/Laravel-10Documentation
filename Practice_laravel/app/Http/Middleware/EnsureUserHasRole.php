<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response ////aikhane ami parameter ta receive korechi $role name
    {
        if (! $request->user()->hasRole($role)) { /////aikhane ami bolechi amra je paramiter ta receive korechi oita jodi request user ar role na hoy tahole amake redirect kore debe / a
            return redirect('/');
        }

        return $next($request); //// amra je paramiter ta receive korechi oita jodi request user ar role hoy tahole amake redirect kore debe next request a
    }
}
