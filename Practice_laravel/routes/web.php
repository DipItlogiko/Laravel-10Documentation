<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

///////////// Retrieving Data-----------------------
////////(check READEME.md)
///////////(Retrieving session data with Request instance $request)

Route::get('/get-all-session', function () {
    $session = session()->all();

    return $session;
})->name('get-all-session');


/////////// data store in session---------------------

Route::get('/set-session', function (Request $request) {
    $request->session()->put('user_name','Dip');
    $request->session()->put('user_id','1');

    return redirect()->route('get-all-session');
});


////////////// session theke data delete ba destroy ---------------------

Route::get('/delete-session', function (Request $request){
    // $request->session()->forget('user_name');
    // $request->session()->forget('user_id');

    /////// OR----(amra oopore 2 bar na likhe nicher moto kore akbar ai likhe dite pari)
    $request->session()->forget(['user_id','user_name']);

    return redirect()->route('get-all-session');
});
