<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiResourceController;
use App\Http\Controllers\ApiResourceController2;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


////////////// API Resource Routes---------------

//Route::apiResource('photos', ApiResourceController::class); ///// jodi ami http://127.0.0.1:8000/api/photos/ diye browser a hit kori tahole ami output dekhte pabo

//////OR 
///// (You may register many API resource controllers at once by passing an array to the apiResources method:)
////(for this practice i have created one more api resource controller which is ApiResourceController2)

// Route::apiResources([
//     'photos' => ApiResourceController::class,
//     'posts' => ApiResourceController2::class,
// ]);

///////////////// API Singleton Resources--------------------

Route::apiSingleton('profile', ApiResourceController::class);



