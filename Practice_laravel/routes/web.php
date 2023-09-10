<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\FileController;
 

 
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
    return [1, 2, 3];
});



///////////////////// Response Objects---------------------

Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});


////////////////// Eloquent Models & Collections

Route::get('/users/{user}', function (User $user) { ////// akhane /users/id number diye hit korle oi user ar sob data show korbe
    return $user;
});


//////////////// Attaching Headers To Responses--------------------

Route::get('/example', [ExampleController::class,'exampleMethod']);


///////////////  Cache Control Middleware---------------------------
/////////(Check READEME.md)

// Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () { ///// ai middleware ta laravel a bydefault vabe thake ar kaj hocche header ar  Cache Control kora
//     Route::get('/privacy', function () {
//         return response('Hello World', 200);
//     });

//     Route::get('/terms', function () {
//         return response('Terms and Conditions', 200);
//     });
// });



/////////////// Attaching Cookies To Responses------------------------
Route::get('/cookie',[CookiesController::class,'index']); ///// ami ai route a hit kore inspect kore application ar moddhe giye Storage a giye Cookies ar moddh giye  amra dekhte pari amader cookie ta amra cookie ar jei nam dibo oi name tai dekhte pabo


//////////OR ----------------------
//////(chack READEME.md)
//////(for this practice i use  this use Illuminate\Support\Facades\Cookie; on the top of the controller file)

Route::get('/set-cookie', [CookiesController::class,'test']);


////////////// Expiring Cookies Early------------------------------
//////////(ar maddhome amra akta cookie ar meyad sesh hoyar aagei take delete kore dite pari)

Route::get('/remove-cookie', [CookiesController::class,'remove']);

///////////// Cookies & Encryption----------------------------------
/////////(for this practice i have written code into the  app/Http/Middleware/EncryptCookies.php)
////////(chack READEME.md)



///////////// View Responses----------------------------------------

Route::get('/demo-response' , function(){
    return response()
    ->view('welcome')
    ->header('Content-Type', 'text/html');
});


/////////////// JSON Responses---------------------------------------
////////(chack READEME.md)

Route::get('/json-response' , function(){

    return response()->json([
    'name' => 'Abigail',
    'state' => 'CA',
    ]);
});

/////////////// File Downloads-----------------------------------------
///////(Download a File Using response()->download($pathToFile);)

Route::get('/download-file', [FileDownloadController::class,'downloadFile']);

/////// OR-----------------------
/////(Download a File with Custom Name and Headers)

Route::get('download',[FileDownloadController::class,'downloadFileWithCustomNameAndHeaders']);



///////////////// Streamed Downloads-------------------------------------

Route::get('/download-readme', [GitHubController::class,'downloadReadme']);


//////////////// File Responses------------------------------------------
///////////(show a File in browser)

Route::get('/file-response', [FileController::class,'show']);

//////// OR-----------------------
/////(show a File with Headers in browser)
Route::get('/file-response2', [FileController::class,'show2']);

////////////// Response Macros---------------------------------------------
//////////(check READEME.md);
///////(for this practice i have written code into the app/providers/AppServiceProvider in boot method)

Route::get('/test-caps', function () {
    return response()->caps('Hello, World!'); //////caps take ami amar app/providers/AppServiceProvider in boot method ar moddhe define kore diyechi
});

////////////// OR-------------------

Route::get('/test-caps2', function () {
    return response()->dip('foo'); //////caps take ami amar app/providers/AppServiceProvider in boot method ar moddhe define kore diyechi
});

