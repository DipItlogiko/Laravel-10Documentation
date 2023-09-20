<?php

use Illuminate\Support\Facades\Route;

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

///////////// HTTP Exceptions--------------------------
///////////(check READEME.md for more information)


Route::get('/', function () {
    abort(404); //////// akhane ami abort diye 404 error  ke call korechi jodi amar ai url mane / a kew hit  kore tahole take 404 error ta dekhabe  
});
