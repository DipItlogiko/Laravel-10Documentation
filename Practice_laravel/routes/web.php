<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ViewController;


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



//////////////// Introduction--------------

Route::get('/test', function () {
    return view('greeting', ['name' => 'dip']); ///// akhane ai view ta hocche helper method
});


/////////// Creating & Rendering Views---------------
///////(Views may also be returned using the View facade . for this practice i have written use Illuminate\Support\Facades\View; on the top of this file)

Route::get('/test2', function () {
    return View::make('greeting', ['name' => 'diap']); ////// akhae ai View ta hocche facade's 
});

///////// Creating The First Available View------------------

Route::get('/example',function(){
    $data=[];
    return View::first(['custom.admin', 'admin'], $data); //// akhane return kora hoyeche View facad's ar first method ar maddhome first method ta prothom je view take pabe oitake return kore debo jodi amader prothom view ta exest ta thake resources/views ar moddhe tahole first method porer view file ta check korbe jodi oita ooo exest na thake tahole tar porer ta check korbe and oita jodi exest thake tahole oi view file ta show korbe ...akhane jemon amar 2 ta view file eee exest ache tai ooo prothom takei show koreche and 2nd ta kore ni
});


////////////// Determining If A View Exists-------------------

Route::get('/view',[ViewController::class,'index']);


/////////// Passing Data To Views-------------------

Route::get('/passData',function(){
    return view('greeting')
        ->with('name','dip') ////// akhane key value hishebe data pass korchi 
        ->with('occupation','student');
});


//////////// Sharing Data With All Views-------------
////////(for this practice i have written code into the App\Providers\AppServiceProvider under the boot method)
Route::get('/sharing',function(){
    return view('sharing');
});



/////////// View Composers-------------------------
///////(for this practice i have created  a new provider which name is ViewServiceProvider and i also registered it into the config/app.php)
// closure based composers.

Route::get('/viewComposers',function(){
    return view('admin');
});

////OR-------------
///class based composers
////(i understand but code is not execute properly)
Route::get('/classBased',function(){
    return view('profile');
});



/////////////// View Creators--------------------------------
///// (View "creators" are very similar to view composers...that's way i did not do the practice)

