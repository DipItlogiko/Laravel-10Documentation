<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



////////////  Defining Middleware-----------------------------------------------------------------------------------
/////////// http://localhost:8000/protected?token=my-secret-token  ai url diye hit korle amra /protected route ta dekhte pabo karon ami oi route ar sathe akta middleware set kore diyechi and oi middleware ar sorto millei kebol kew oi /protected route ta dekhte parbe 


// Route::get('/home', function () {
//     return view('welcome');
// });


// Route::get('/protected', function () {
//     return "Access granted to protected route.";
// })->middleware('ensure.token');


///////////// Middleware & Responses--------------
///////(amra middleware ar moddhe kichu task ke Request amader server a pathanor aage perform korate pari)


// Route::get('/', function () {
//     return view('welcome');
// })->middleware('before.check'); ///// chack the middleware app/Http/kernel.php 



///// OR

///////(amra middleware ar moddhe kichu task ke, Request amader server a pathanor pore perform korate pari)

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('after.check'); ///// chack the middleware app/Http/kernel.php 


///////// Registering Middleware--------------------------------------------------------------------------------------------------------------------

//////Global Middleware------
////(check README.md)


//////  Assigning Middleware To Routes -------

// Route::get('/dip', function () {
//     return view('welcome');
// })->middleware('auth'); //// here i have Assigned a middleware with route auth is located in app/Http kernel.php


// //// we need this below code to execute above auth middleware
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';




///////// Assigning Multiples Middleware To Routes----------

// Route::get('/', function () {
//     // ...
// })->middleware(['auth', 'before.check' ]); ///// here i have assigned multiples middleware to a route and this 2 middlewares are located at app/Http kernel.php and when you used 2 middlewares in one route you have to put those middlewares in []



//////// Excluding Middleware ----------------
/////(jodi amader kokhono emon hoy je amra akta route middleware group ar moddhe theke kono route ke oi middleware theke bad dite chacchi tokhon amra withoutMiddleware('') ta ke bebohar  korte pari)


// Route::middleware('auth')->group(function () {
    
//     Route::get('/home', function () {
//         return view('welcome');
//     });
 
//     Route::get('/ownpost', function () {
//         return 'i am ownpost route';
//     })->withoutMiddleware('auth');

// });


// //// we need this below code to execute above auth middleware
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


///////////Middleware Parameters------------------------------------------------------------------------------------
/////(for this practice i have added some code in Models/User.php )

// Route::get('/post', function () {
//     return 'it\'s working!!!'; 
// })->middleware(['auth','role:admin']); //// for this i have created a new field in users table the field name is role and the role fiel value is admin and role:admin role is my middleware and admin is my parameter.


// //// we need this below code to execute above auth middleware
// Route::get('/',function(){
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



//////////// Terminable Middleware-------------------------------------------------------------------------------
/////(for this i have write some code in AppServiceProvider)


Route::get('/terminable',function(){
    return 'it\'s working';
    ////dd(app());////for checking my middleware is succussfully bind or not with service container
})->middleware('terminable');
