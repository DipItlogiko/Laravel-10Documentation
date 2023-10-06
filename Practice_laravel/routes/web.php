<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

///////////Accessor ta thik thakvabe kaj korche ki na ta ai route aa check kore hoyeche..ami jei Accessor ta amader User model ar moddhe create korechi ooi Accessor ta.
Route::get('/testAccessor',function(){
    $user = User::find(1); ///// akhane ami amar User model theke mane User  model ta jei database ar table ke represent kore jemon users table oi table theke ami find korchi 1 mane id 1 oi id 1 ar jei data ta ache sob data amader ai $user variable ar moddhe chole ashbe.

    return $user->dob; ///// akhane ami $user variable ar moddhe theke shudhu oi id 1 ar dob column ar value take return korechi...akhane ami dekhte pabo amader User Model ar moddhe amra amader Accessor take jei vabe set kore diyechi amader ai dob column ar jonno thik oivabei amra aikhane oi dob column ar value ta dekhte parchi ...amader database ar users table ar dob column ar value gulo oonorokom ache amra jodi chai check korte pari kintu ami jokhon amader User model ar moddhe dob column ar jonno akta Accessor set kore rekhechi tai jokhon eee amra amader users table ar dob column ar value ta show korbo tokhon oi value ta amader User model ar Accessor ar moddhe ashbe and oikhan theke modify hoye amader ai khane show hobe...  
});







Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
