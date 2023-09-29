<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Gates\AdminGate;
use App\Policies\AdminPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        //'App\Models\User' => 'App\Policies\UserPolicy',  /////amra akta jinishke ai 2 vabe likhte pari amader prothom jei ta ache ai ta holo amader moddle and amader second a jeita ache aita holo amader Policy. akhane amader banano policy guloke registar kore diyechi...jodi amra policy create korar somoy ar naming convension na mani tahole amader aikhane oi Policy take register kore dite hobe.r jodi amra policy create korar somoy amader laravel ar naming convension mani tahole r register korar dorkar nei laravel amni tei oi policy guloke detect kore nebe. aikhane ami jokhon policy create korechi tokhon naming convension  ta menechi tai amar ai ta register korar dorkar chilo na ta oooo bohar jonnno korechil.   
        //User::class => UserPolicy::class,      
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gate::define('isAdmin',function($user){ //////first argument ta hocche amader user ar instance (aikhane ami ar nam diyechi isAdmin ami chaile aikhane onno je kono nam dite pari)  mane kon user akhon login koreche tar instance amra dekhte pabo
        //     if($user->email === "admin@gmail.com"){ return true ;} else { return false ; }
        // });

        ////////// i have written this above if conditions into a separate directory which is located into the app/Gates in this directory i have created one file which name is AdminGate.php into the AdminGate.php file i have created a class which name is AdminGate.php into the AdminGate and i use this AdminGate calss top of this file.
        Gate::define('isAdmin_Custom_Directory',[AdminGate::class,'check_admin']); //////first argument ta hocche amader user ar instance (aikhane ami ar nam diyechi isAdmin_Custom_Directory ami chaile aikhane onno je kono nam dite pari)  mane kon user akhon login koreche tar instance amra dekhte pabo and ai first argunet ar nam ta jokhon amra kono route ar sathe add kore debo tokhon ai authorization ar code ta execute hobe...
            

    }
}
