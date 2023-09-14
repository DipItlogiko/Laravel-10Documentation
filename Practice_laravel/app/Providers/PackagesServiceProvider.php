<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Form\Input;
class PackagesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void  /////// kono custom provider create korle shei ta ke config/app.php ar moddhe thaka providers array ar moddhe register kore dite hobe ta chara laravel bujte parbe na amra akta service provider add korechi
    {
        Blade::component('package-Input', Input::class); //////// akhane ami amar class based component ar alias create korechi  package-Input name jemon amar akta class based component ar nam hocche Input ai Input component ar  akta alias create korechi package-Input akhon ami ai package-Input name amar Input class based component take call korte parbo jekhane khushi amader application ar moddhe
    }
}
