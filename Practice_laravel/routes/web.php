<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\TestController;

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

//////////// Retrieving All Rows From A Table------------

Route::get('/',[TestController::class,'index']);

//////////// Retrieving A Single Row / Column From A Table----------

Route::get('/test',[TestController::class,'test']);


/////////// Retrieving A List Of Column Values----------

Route::get('/test2',[TestController::class,'test2']);


//////////// Specifying A Select Clause-----------

Route::get('/test3',[TestController::class,'test3']);

/////// Pessimistic Locking---------------

Route::get('/test4',[TestController::class,'test4']);

/////////// Debugging----------------------

Route::get('/debug',[TestController::class,'debug']);


