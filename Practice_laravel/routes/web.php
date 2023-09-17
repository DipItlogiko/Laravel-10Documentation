<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

//////////////// Accessing The Current URL---------------------------

Route::get('/', function () {
    //dd(url()->current()); ////////////// amra aikhane current url check korechi 
    
    //dd(url()->full()); ////////aikhane amra full url ta pabo

    //dd(url()->previous()); ////////////////// aikhane amra previous url ta check korchi aage jemon amar ai url ta chilo / 
     
    //dd(URL::current()); ////////////////// amra aikhane URL Facades bebohar kore current url ta dekhchi
    return view('welcome');
});


/////////////// Signed URLs-------------------------
///////(for this practice you should uncoment the / route)
//////////(go welcome.blade.php)

Route::get('/secret',function(Request $request){
    if (! $request->hasValidSignature()) { /////jodi amader url a kono valid signutare na thake tahole ooo 401 error throw korbe ami akhane chile kono custom blade file create kore ooo return kore dite pari sorasori eeerror throw na kore
        abort(401);
    }

    return "this is a secret message"; ///// r jodi valid singature thake amader url a tahole ooo ai ta return korbe 
})->name('secret');


/////////// OR
////////(this is the another method of Signed URLs which name is temporarySignedRoute go READEME.md for mor information)

// Route::get('/secretPage',function(Request $request){
//     if (! $request->hasValidSignature()) {  
//         return view('expaired'); 
//     }

//     return "this is a secret message"; ///// r jodi valid singature thake amader url a tahole ooo ai ta return korbe 
// })->name('secretPage');

/////// OR (we can replace above if statement with middleware....by default laravel provide a middleware which name is signed....the middleware alias is located into the app/Http/kernel.php 

Route::get('/secretPage',function(Request $request){
    return "this is a secret message"; 
})->name('secretPage')->middleware('signed'); //////// signed middleware ta check korbe je amader url a kono signed ache ki na jodi amader url theke kono signed key na ashe tahole ooo akta eerror throw korbe jodi amra oi eeerror take customize korte chai tahole check (Responding To Invalid Signed Routes) this section in READEME.md of this  Document


/////////////////// URLs For Controller Actions-------------------

Route::get('/URLS',function(Request $request){
    return view('test');
}); 
Route::get('/sayHello', [HomeController::class, 'sayHello'])->name('sayHello');