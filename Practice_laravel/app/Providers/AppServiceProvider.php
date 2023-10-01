<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


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
        Paginator::useBootstrapFive(); ////// amra jodi ai useBootstrapFive() use kori tahole amader pagination view ta shundor vabe organized vabe dekhabe...
        //Paginator::useBootstrapFour(); ///// aita use korle ooto shundor vabe dekhabe na joto ta shundor vabe amader useBootstrapFive() ai ta use korle amader pagination view ta dekhai.
    }
}
