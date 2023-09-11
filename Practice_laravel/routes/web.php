<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IfStatementController;

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


////////// Displaying Unescaped Data--------------------

Route::get('/test3', function () {
    return view('test3', ['name' => '<b>DIP</b>']); ////// akhane ami name pass korechi html tag soho jodi ami amar view file a ai name variable take {{ $name }} diye call kori tahole ooo html ar tag soho amader browser a show korbe 
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


/////////// The @verbatim Directive-----------------------
//////(Check READEME.md before watching this practice)

Route::get('/verbatim', function () {
    return view('verbatim');
    
});


//////////// If Statements--------------------------------

Route::get('/IfStatement', function () {
    $array=[1,5];
    return view('ifStatement',['array' => $array]);
});


////////// @unless directive------------------------------

Route::get('/authentication-status', function () {
    return view('authentication_status');
});


///////// @isset directive--------------------------------

Route::get('/isset', function () {
    $name = 'dip';
    return view('isset',['name' => $name]);
});


///////// @empty directive--------------------------------

Route::get('/empty', function () {
    $name = 'dip';
    return view('empty',['name' => $name]);
});

///////// Environment Directives---------------------------
///////(@production Directive)

Route::get('/demo',function () {
    return view('demo');
});


///////(@env() Directive)

Route::get('/env',function () {
    return view('env');
});