<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\View\Composers\profileComposer;

class ViewServiceProvider extends ServiceProvider
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
    public function boot(): void
    {
       
        ///// closure based composers...
         
        View::composer('custom.admin',function($view){   /////// View facade's ar composer() method ar first paramiter hocche view file ar nam mane kon view file a amra data take pass korte chacchi oi ta.
           
            $view->with('City', 'Faridpur'); /////akhane key value hishebe data pass korechi
        });


        ///OR------------

        View::composer(['custom.admin','admin'],function($view){   /////// View facade's ar composer() method ar first paramiter hocche view file ar nam mane kon view file a amra data take pass korte chacchi oi ta jemon ami 2 ta view file a datatake pass korechi akhane joto khushi toto view file ar nam dewa jai
           
            $view->with('City', 'Faridpur');
        });


        ///OR------------

        View::composer('*', function ($view) { /////// akhane * mane hocche amar jotogulo view file ache sob view file gulo akhan theke je data ta pass korbo ta access korte parbe. jodi amar view folder ar moddhe r oo folder thake ami chacchi je oikhan theke je kono akta folder ar moddhe joto gulo view file ache tar moddhe akhan theke je data ta pathabo seita jeno access korte pare tar jonno aikhane prothom paramiter  a view folder ar moddhe thaka oi folder ar nam likhe * chinho diye dile oi folder ar sob view file aikhan theke pathano data ta access korte parbe  
            // ...
        });


        ////// class based composers...

        View::composer('profile', ProfileComposer::class);

    }
}
