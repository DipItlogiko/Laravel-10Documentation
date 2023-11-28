<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\PhonController;

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


///// Defining Relationships---(Go to User Model)------------------

Route::get('/dr' ,function(){

    $user = User::find(1);   /// akhane amader User Model ta database ar jei table take represent kore jemon amader ai User Model ta database ar users table take represent kore oi table  ar moddhe theke amader 1 diye find korbe mane amader id jeikhane 1 ache users table ar moddhe oi data ta akhane niye ashbe database theke and oi data take $user ai variable ar moddhe store kore dibe... 
    $post = $user->posts()->where('active', 1)->get();    /// akhane amader $user variable ar moddhe jei datatake pacchi oi data ta theke ami posts() ar moddhe giyechi and ai posts() ta check korche amader $user variable ar moddhe jei user ar data ta pacchi oi user ar id onujayi amader posts table ar moddhe je active column ta ache oi column ar moddhe jei khane shudhu 1 ache oi data guloi shudhu amader akhane aane debe database theke.. ai posts() ta hocche amader User Model ar moddhe jei relation ta amra korechilam posts table ar sathe oi function ar nam ..User model ar moddhe amra users table ar sathe posts table ar One To Many relation korechi mane akjon user ar multiple post thakte  pare..
    dd($post);
});


//// One To One relationship-------------    (check database/migration/users table and phons table structure  and app/Models/User.php and Phon.php)-----------

Route::get('/saveDataIntoDatabase' , [PhonController::class,'saveDataIntoDatabase']);
Route::get('/show/data/{id}', [PhonController::class , 'showData']);

////Inverse Of The One To One Relationship------
Route::get('/show/user/data/{id}', [PhonController::class , 'showuserData']);
