<?php

use App\Http\Controllers\ProfileController;
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


/////////// Using Gates Via Middleware------------------
///////(check READEME.md)
Route::get('/admin',function () {
    return  "hello admin";
})->middleware('auth','can:isAdmin_Custom_Directory'); ////// akhane jodi ami shudhu auth middleware ta use kortam tahole kono authenticated user chile /admin route a hit kore admin ar dashboard ta dekhte parbe kintu ami auth ar sathe amader laravel ar bydefault authorization middleware 'can' use korechi and can: ar sathe amader Gate diye define kora akta ar nam(ja amra amader app/Providers/AuthServiceProvider ar boot method ar moddhe difine kore diyechi) ar pore bole diyechi akhon kono authenticated user chailei amader /admin route a hit kore admin ar dashboar dekhte parbe na.amara isAdmin_Custom_Directory ai name je Gate define korechi app/Providers/AuthServiceProvider ar boot method ar moddhe oi gate ar moddhe jei condition gulo set kora ache jodi oi condition gulo match kore amader authenticated user ar sathe taholei shudhu oi authenticated user amader ai /admin route ar access pabe ta chara na.  

///////// Using Gates Via Blade-------------------------------
/////(check READEME.md)
Route::get('/result',function(){
    return view('result');
})->middleware('auth');



//////////////// Using Policies via Middleware----------------
/////////(Check READEME.md)

Route::get('/policy',function(){
    return 'hello admin';
})->middleware(['auth','can:Admin,App\Model\User']); ////// amra aage auth middleware ta use korechi mane amader ai route aa ashte hole aage user ke authenticate hoye ashte hobe mane login kore ashte hobe tar por amra aikhane can middleware ke call korechi ai can middleware ta amader larvel application ar moddhe bydefault vabe thake app/Http/Kearnel.php ar moddhe ai can middleware ar kaj hocche authorization provide kora and ai can: ar sathe amra amader Admin Policy(Policy and Gates ar kaj hocce authorization provide kora) ta add kore diyechi ai Admin authorizatin Policy ta amra app/Policies/UserPolicy.php ar moddhe create korechi and tar pore amra bole diyechi ai authorization ta amader kon Model ar opor hobe jemon ami akhane bole diyechi amader ai authorization ta App\Model\User ai model mane User Model ar opor hobe.


/////////////// Using Policies via Blade

Route::get('/Policies',function(){
    return view('test');
})->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
