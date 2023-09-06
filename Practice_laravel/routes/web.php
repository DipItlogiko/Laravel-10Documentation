<?php

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChackPathController;
use App\Http\Controllers\UrlChackController;
use App\Http\Controllers\RequestMethodController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\IPController;
use App\Http\Controllers\ContentNegotiationController;
// use Psr\Http\Message\ServerRequestInterface;
use App\Http\Controllers\InputController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BirthdayController; 
use App\Http\Controllers\EnumController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CookiesController; 
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

// Route::get('/', function () {
//     return view('welcome');
// });

/////////////////// Accessing The Request--------------------
// Route::get('/sub',[UserController::class,'form']);
// Route::post('/name',[UserController::class,'indexAction'])->name('name');


////////// OR

// Route::get('/dip', function (Request $request) {
//     return 'Hello dip';
// });


/////////////////// Request Path, Host, & Method-------------------------------

// Route::get('/request', [ChackPathController::class, 'Request']);
// Route::post('/postdata' , [ChackPathController::class, 'Postdata'])->name('postdata');


//////////// Inspecting The Request Path / Route-----
///////(for this practice i have added some code into the ChackPathController Postdata method)
//  Route::get('/request', [ChackPathController::class, 'Request']);
//  Route::post('/postdata/admin' , [ChackPathController::class, 'Postdata'])->name('postdata');

/////(jodi ami nicher aita uncomment kore oporer post method route ta commeten kori and run kori amader code tahole amra dekhte paro browser a you are not allowed karon ami amar controller ar Postdata method a set kore diyechi postdata/* ai path chara kew admin dekhte parbe na)
// Route::post('/dip' , [ChackPathController::class, 'Postdata'])->name('postdata');


///////// OR
/////(for this practice i have added some code into the ChackPathController Postdata method and  i also overwite request.blade.php action method route('postdata') to route('postdata.dibbo'))

//  Route::get('/request', [ChackPathController::class, 'Request']);
//  Route::post('/postdata/admin' , [ChackPathController::class, 'Postdata'])->name('postdata.dibbo');
//  Route::post('/dip' , [ChackPathController::class, 'Postdata'])->name('postdata.dip');



/////////////// Retrieving The Request URL------------------------------------------------------------

// Route::get('/request', [UrlChackController::class, 'Request']);
// Route::post('/postdata', [UrlChackController::class, 'postdata']);


 
//////////////////// Retrieving The Request Host-------------------

// Route::get('/request', [UrlChackController::class, 'Request']);
// Route::post('/postdata', [UrlChackController::class, 'postdata']);

 
///////////////// Retrieving The Request Method------------------------------
/////////(for this practice i have created a new Controller which name is RequestMethodController)

// Route::get('/request', [UrlChackController::class, 'Request']);
// Route::post('/postdata', [RequestMethodController::class, 'postdata']); 


////////////////////////  Request Headers------------------------------

 //Route::get('/test-header', [HeaderController::class,'testHeader']);


/////////////////////// Request IP Address------------------------------

// Route::get('/get-ip', [IPController::class,'getIP']);

////////////////////// Content Negotiation------------------------------
//////(check README.md)
//Route::get('/content-negotiation', [ContentNegotiationController::class,'index']);


///////////////OR-------------

// Route::get('/check-accept', [ContentNegotiationController::class,'showForm']);




////////////////////////// PSR-7 Requests-------------------------------

// Route::get('/dip',function (ServerRequestInterface $request){
//        dd($request->abs());
// });


///////////////////// input ------------------------------------------------------------
///////////////// Retrieving Input---------------
//////////////// Retrieving All Input Data------

//Route::get('/index',[InputController::class,'form']);
//Route::post('/postdata',[InputController::class,'submit']);



/////////////////// Retrieving An Input Value----------------------------------------

//Route::get('/index',[InputController::class,'form']);
//Route::post('/postdata',[InputController::class,'post']);

////////// OR-----------
//Route::get('/practice', [InputController::class,'getProductName']);

////////// OR-----------
//Route::get('/test', [InputController::class,'getProductName1']);

 

///////////// Retrieving Input From The Query String----------

//Route::get('/index',[InputController::class,'index']);


///////////// Retrieving JSON Input Values-------------------------------------------------

// Route::view('/json-form', 'json-form');
// Route::post('/json-exampl',[JsonController::class,'handleJsonRequest']);


///////////// Retrieving Stringable Input Values------------------------------

// Route::get('/test',[InputController::class,'show']);
// Route::post('/process-name',[InputController::class,'processName']);


/////////////// Retrieving Boolean Input Values----------------------------------------
////////(chack READEME.md)

// Route::get('/archive-task', [TaskController::class,'archiveTask']);
// Route::post('/post-data',[TaskController::class,'postData']);


/////////////// Retrieving Date Input Values -------------------------------------------

// Route::get('/process-birthday', [BirthdayController::class,'index']);
// Route::post('/postdata', [BirthdayController::class,'postData']);

////////////////////// Retrieving Enum Input Values---------------------------------------

// Route::get('/test',[EnumController::class,'test']); 
// Route::post('/postdata',[EnumController::class,'postData']);


/////////////////// Merging Additional Input--------------------------------------

// Route::view('/test','test'); ///// prothom ta hocche route ar nam second ta hocche view file ar nam
// Route::post('/postdata',function(Request $request){
//    //$res = $request->merge(['vote' => 20]); ///// aikhae jodi amra form ar input field kono number na dei tahole ooo akhan theke 20 number ke oi field a marge kore debe jodi kew oi field ar kono number dei oooo tahole ooo  oi 20 number ke marge kore debe aita holo marge ar akta problem
//    //dd($res);

//    ///// marge ar ai problem take amra aivabe solve korte pari
   
// //    $result = $request->mergeIfMissing(['vote' => 0]); //////// akhane ami bole diyechi je jodi amar form ar input field a kew kono value na dei mane emty thake shudhu matro tokhon tumi ai 20 number ta marge kore diba oi input field aaaa
// //    dd($result);

// });


/////////////////// Old Input-----------------------------------------------------------------------------
//////////// Flashing Input To The Session-------------

Route::get('/', function () {
    return view('welcome');
});
Route::view('/test','flash');
Route::post('/postdata',[FlashController::class,'postData']);



////////////////////////// Flashing Input Then Redirecting---------------------------------
///////////////(chack READEME.md) 


/////////////////////////  Cookies-------------
////////////Retrieving Cookies From Requests


////////////////////// File Paths & Extensions---------------------------------
/////////////////////Storing Uploaded Files(the practice has done here and check Reade.md for more importean information about it )

// Route::view('/show', 'file');
// Route::post('/upload', [FileController::class,'uploadFile']);





 

 