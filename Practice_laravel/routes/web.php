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
    return view('welcome');
});


////////////// Displaying Data--------------

Route::get('/', function () {
    return view('welcome', ['name' => 'dip']);
});


//////////// HTML Entity Encoding------------------
//////(for this practice i have written come code into the AppServiceProvider under the boot() method)

Route::get('/home', function () {
    return view('home');
});


/////////// Blade & JavaScript Frameworks------------------------

Route::get('/blade', function () {
    return view('test');
});


//////////// Rendering JSON----------------------------

Route::get('/array-to-json', function (){
    $array=['name' => 'dip', 'roll' => 5]; //// aita akta associative array karon ai array ar moddhe key value pairs a data ache 

    return view('arrayToJson',['array' => $array]);
});
