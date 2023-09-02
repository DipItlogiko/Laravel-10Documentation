<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController2;
use App\Http\Controllers\UserController3;
use App\Http\Controllers\UserController4;
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


// Route::resource('photos', MovieResourceController::class)->except([ ///// akhane ami bole dicchi amar MovieResourceController ar moddhe je mehod gulo ache ta theke expect() ar moddhe jei method ache ai gulo ke she bad diye debe mane MovieResourceController ta ai method gulor moddhe apply hobe na
//     'create', 'store', 'update', 'destroy'
// ]);


////////////// API Resource Routes---------------
/////////(Check README.md)
///////(for this i have created a new controller which name is ApiResourceController)
///////(check routes/api.php)



////////////////////// Nested Resources-------------------------------------------------------------------------
//////(check READEME.md)

//Route::resource('photos.comments', MovieResourceController::class); ////// ai resource ta ai vabe kaj korche /photos/{photo}/comments/{comment}


////////////// Shallow Nesting------------
//////(check READEME.md)

//Route::resource('photos.comments', MovieResourceController::class)->shallow();

 
/////////////// Naming Resource Route Parameters-------------------------------------------------------------------

// Route::resource('users', MovieResourceController::class)->parameters([ //// akhane amra user ar paramiter change kore diyechi bydefault ja thake tar theke. now it's look like /users/{admin_user}
//     'users' => 'admin_user'
// ]);


/////////////// Scoping Resource Routes----------------------------------------------------------------

// Route::resource('photos.comments', MovieResourceController::class)->scoped([ ///// it looks like  /photos/{photo}/comments/{comment:slug}
//     'comment' => 'slug',
// ]);


////////////////// Localizing Resource URIs--------------------------------------------------------
////////(for execute this below code you have to uncomment some code from RouteServiceProvider )

//Route::resource('photos', MovieResourceController::class); /////akhaner bydefault url ta amra customize korechi RouteServiceProvider ar  moddhe  . akhon ami jodi /photos/ar por MovieResourceController ar kono method ar nam diye url a hit kori tahole kono kaj hobe na.jodi ami amar RouteServiceProvider a giye jei nam diye set korechi oi nam diye browser a hit kori tahole kaj korbe jemon /photos/ diye   hit kore kaj korbe /photos/crear dile kaj korbe kintu /photos/create dile kaj korbe na karon ami amr RouteServiceProvider ar moddhe set kore diyechi.edit ke access korte hole likhte hobe /photos/1/editar karon edit ke amra editar name set korechi aikhane edit dile kaj hobe na    



////////////////// Supplementing Resource Controllers-----------------------------------------------

// Route::get('/photos/popular', [MovieResourceController::class, 'popular']);
// Route::resource('photos', MovieResourceController::class); ////// amra resource Route a jei route name dibo oi name diye jodi r kono route ar nam suru hoy tahole amra oi route ke resource route ar opore likhbo jodi amra oi route take resource route ar niche likhi tahole resource route ta oi route take ooo tar awtai niye nei  


//Route::get('/photos/popular', [MovieResourceController::class, 'popular']);


////////////////// Singleton Resource Controllers------------------------------------------------------
////////(CHECK READEME.md)

//Route::singleton('profile', MovieResourceController::class);

///////// OR-------------------------------

// Route::singleton('photos.thumbnail', MovieResourceController::class);


////////////////// Creatable Singleton Resources------------------------------------------------------
////////(CHECK READEME.md)

//Route::singleton('photos.thumbnail', MovieResourceController::class);


////////////////// API Singleton Resources------------------------------------------------------------
////////(go to routes/api.php)


/////////////////////// Dependency Injection & Controllers---------------------------------------------------------------
////////(CHECK READEME.md)
///////(for this practice i have written code into the UserController4 and i also created Repositories directory and create a new file in that directory the file name is UserRepository.php)


// Route::get('/users', [UserController4::class, 'index']);



////////////////////// OR-------------------------------

Route::get('/user/{id}', [UserController4::class, 'update']);

