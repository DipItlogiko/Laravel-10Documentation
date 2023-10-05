<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserCreated;
use App\Listeners\UserCreatedListener;
use App\Models\User;
use App\Observers\UserObserver; 

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        UserCreated::class => [ /////// UserCreated ta amader akta event jeita amra app/Events ar moddhe create korechi and ai event ta fire hole amader kon listener ta ai event take listen korbe ta amra ai array ar moddhe bole diyechi
            UserCreatedListener::class //// ai listener ta ami create korechi app/Listener directory ar moddhe

        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot() : void
    {
        User::observe(UserObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
