<?php

namespace App\Providers; 

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('caps', function (string $value) { //////akhane ami akta custom response generate korechi ai response take chaile ami amar route and controller a joto bar khushi re-use korte parbo...Macros() method ta custom response generate korte bebohar kora hoy.....akhane caps hocche amar response ar nam ami aikhane je kono nam dite pari kintu aikhane je nam dibo oi name route theke call korte hobe 
            return Response::make(strtoupper($value));
        });

        Response::macro('dip', function (string $value) { //////akhane ami akta custom response generate korechi ai response take chaile ami amar route and controller a joto bar khushi re-use korte parbo...Macros() method ta custom response generate korte bebohar kora hoy.....akhane caps hocche amar response ar nam ami aikhane je kono nam dite pari kintu aikhane je nam dibo oi name route theke call korte hobe 
            return Response::make(strtoupper($value));
        });
    }
}
