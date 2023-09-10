<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('company','ITLogiko'); //////ami akhane key value aakare data share kore diyechi sob view ar jonno...je kono view page akhon ai company key ta bebohar kore company key ar value ta show korate parbe.ai ta ai vabe set korar por jei kono view file a amra sorasori aita ba ar key sorasori use korte parbo
    }
}
