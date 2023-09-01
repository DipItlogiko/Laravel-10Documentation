<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController3;
use App\Http\Controllers\DipInvocableController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PhotosController2;
use App\Http\Controllers\MovieResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

////////// Writing Controllers-------------------------------------------------
////// Basic Controllers---------

// Route::get('/user/{id}',[UserController::class , 'show']); ///////akhane url a akta id pass korte hobe and shei id ta  UserController ar show method a chole jabe 



////// Single Action Controllers--------(Invokable)
/////(Check README.md)
////(for this practice i have created a new invokable controller DipInvocableController)

//Route::get('/server', DipInvocableController::class); //////// jokhon amra invocable controller use korbo tohon amader controller ar method ar nam bole dewar dorkar nei karon invocable controller akta action kei perform kore


////////// Controller Middleware------------------------------------------------


// Route::get('/user', [UserController::class, 'test'])->middleware('auth');

// ///// we need below code to execute above middleware 
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



//////////// OR

///////(if you want to write middleware into the Controller then you can follow it)

// Route::get('/user', [UserController2::class, 'index']); ////// here i write middleware in UserController2
// Route::get('/users', [UserController2::class, 'store']);
// Route::get('/use',[UserController2::class, 'use']);

// ///// we need below code to execute above middleware 
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';



///////////OR 
/////(if you want to register your middleware into controller then you can follow it)
/////(for this practice i have created a new controller UserController3)

// Route::get('/home',function(){
//     return view('welcome');
// });
// Route::get('/test',[UserController3::class,'index'])->name('profile');
// Route::get('/test-one',[UserController3::class,'show']);


//////////// Resource Controllers---------------------------------------------------------------------------------------------------------------------------------
///////(for this practice i have created a resource controller which name is PhotoController)

// Route::resource('/photos',PhotoController::class);//////PhotoController ta hocche amar resource controller and resource controller ar pore kono method ar nam bola lage na amra url a ja likhbo oita theke oo bujte pare(check READEME.md) get method ar protita url a hit korle amra output dekhte pabo



//////////// Customizing Missing Model Behavior------------------


// Route::resource('/photosdip', PhotoController::class)//////PhotoController ta hocche amar resource controller and resource controller ar pore kono method ar nam bola lage na amra url a ja likhbo oita theke oo bujte pare(check READEME.md) get method ar protita url a hit korle amra output dekhte pabo kintu jodi amader Resource Controller ar url bade oono kono url diye kew hit kore jemon ami akhane /photosdip diyechi ja resource controller ar kono url na tahole take bydefault 404 error dekhabe kintu amra ai 404 error ke Customizing korte pari missing() ar maddhome
//     -> missing(function (Request $request) {
//         return Redirect()->route('photos.index'); //// uporer url jodi match na kore tahole take photos.index route a pathiye debe ai route ta ami create koi nai aita resource controller ar akta name route.(chack READEME.md)
//     });



////////// Soft Deleted Models----------------
/////(for this practice i have created a new resource controller which name is PhotosController2)


//Route::resource('/photos', PhotosController2::class)->withTrashed();///////// withTrashed কে কোন আর্গুমেন্ট ছাড়া কল করা আপনাকে সফ্ট ডিলিট মডেলগুলি দেখাবে শো, এডিট এবং আপডেট রিসোর্স রুটে। আপনি আপনার পছন্দসই এই রুটগুলির সাবসেট সংজ্ঞায়িত করতে পারেন একটি অ্যারে পাস করে withTrashed মেথডে jemon amra niche korechi

//Route::resource('photos', PhotosController2::class)->withTrashed(['show']); ///// amra ar moddhe show , edit ,update je kono akta dite pari kintu jodi amra edit dei tahole amader edit a giye kichu code likhte hobe tahole aita kaj korbe na hole korbe na update ar khetteooo tai... 


/////////// Specifying The Resource Model------------
///////(chack READEME.md)


////////// Generating Form Requests------------------
///////(check README.md)


////////////// Partial Resource Routes-------------------------------------------------------------------------------------------

// Route::resource('photos', MovieResourceController::class)->only([  /////// akhane ami bole dicchi amar MovieResourceController shudhu ai method gulo ke handel korbe 
//     'index', 'show'
// ]);


Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);