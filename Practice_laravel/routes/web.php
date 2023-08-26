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

Route::get('/', function () {
    dd(app());
    //dd(app()->make('test_time')); //// add kora service take retrait korar jonno make() bebohar kora hoy...test_time it's comes from RiakServiceProvider.php
});
