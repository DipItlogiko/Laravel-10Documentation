<?php

namespace App\Providers;

use App\Services\Riak\Connection;////why it's use i don't understand
use Illuminate\Contracts\Foundation\Application; ////why it's use i don't understand
use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        ////__Service Container a bind kora hoyeche__////
        app()->bind('test_time' , function (){  ///// service add korar jonno bind ba singleton bebohar kora jai aabar ai service take retrait korar jonno make() bebohar kori(check Service Container Branch README.md)
            return uniqid();
        });
    }

     
}
