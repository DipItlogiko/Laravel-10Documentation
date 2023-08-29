<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use App\Models\User;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
  
    {
        //Route::bind ব্যবহার করে আপনি আপনার ব্যক্তিগত প্রয়োজনগুলি মেটাতে পারেন।
        Route::bind('user', function (string $value) {
            return User::where('name', $value)->firstOrFail();
        });
        
        // Route::model('user',User::class);
        //Route::pattern('id','[0-9]+');
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        ///////i have created my own--------------------------------------------------------------
        ////(for() ar moddhe prothom paramiter a amra je kono nam dite pari)
        RateLimiter::for('custom_limit',function(Request $request){
            return Limit::perMinute(4); ////akhane perMinute a 4 ta request jabe server a
        });


        RateLimiter::for('dip', function (Request $request) {
            return Limit::perMinute(5)->response(function (Request $request, array $headers) {
                return response('TOO many request!!!...', 429, $headers);
            });
        });


        RateLimiter::for('login', function (Request $request) {
            return [
                Limit::perMinute(500),
                Limit::perMinute(3)->by($request->input('email')),
            ];
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
