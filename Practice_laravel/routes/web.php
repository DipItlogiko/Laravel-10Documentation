<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Enums\Category;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Models\User;
use App\Models\Post;

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

// Route::get('/greeting', function () {
//     return 'Hello world';
// });

//////  /form url ar request get hok ba post hok 2 tar khettrei ai /form route kaj korbe ai match() method ar maddhome
// Route::match(['get', 'post'], '/form', function () {
//     return view('form');
// });

/////// '/' ai url ar request jai hok na keno ai route ta kaj korbe any() method ar karone
// Route::any('/', function () {
//    return view('form');
// });

///////  akhane kew jodi /form url a hit kore tobe take redirect kore /greeting a niye jabe
//Route::redirect('/form', '/greeting');

//////   By default, Route::redirect returns a 302 status code. You may customize the status code using the optional third parameter:
//Route::redirect('/form', '/greeting', 305);



///// View Routes

//Route::view('/contant','contant1'); ////akhane prothom ta hocche route ar url '/contant' and second ta hocche amar view file ar nam 'contant1'. jokhon kew ai url a hit korbe tokhon take ai view ta dekhano hobe 

///OR

/// akhane ami contant1.blade.php file a name nam a akta variable ar moddhe Dibbo ghosh ke pass korechi 
//Route::view('/contant', 'contant1', ['name' => 'Dibbo ghosh']); 


////// Route Parameters(single parameter)

// Route::get('/user/{id}', function (string $id) { //// browser a giye ami jodi /user/15 diye hit kori tahole User 15 dekhte pabo
//     return 'User '.$id;
// });


////(multiple parameter) 

// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     return 'post  '.$postId .  '  comments  '.$commentId;
// });


///////// Optional Parameters----------------------------------------------------
////(jodi kew /user/kono nam ba string diye hit kore tahole oi name tai return korbe browser a .r jodi /user/ar por  kichu kono kichu na dei ta akta blank page ashbe karon amra $name = null abong {name?} aita bole diyechi)
// Route::get('/user/{name?}', function (string $name = null) { 
//     return $name;
// });

////OR
///(akhane ami name ar bydefault akta value set kore diyechi...jodi kew url ar sathe name na oo pos kore tahole bydefault ooo name variable ar bydefault value ta return kore debe)

// Route::get('/user/{name?}', function (string $name = 'John') {
//     return $name;
// });


////////Regular Expression Constraints--------------------------------------------------------------------
////(akhane url a amra jei name ta dibo oita jodi oita capital latter ba small latter hole problem nei kintu kew jodi number dei tahole aita r kaj korbe na.karon amra where() ar moddhe bole diyechi amar name ta ki diye hobe)

// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

////OR
//(akhane ami bole diyechi where()ar moddhe amar id ta 0-9 ar moddhe hobe akhane latter dile kaj hobe na)

// Route::get('/user/{id}', function (string $id) {
//     return $id;
// })->where('id', '[0-9]+');


////OR
////(akhane id abong name 2 tai dite hobe ta chara aita kaj korbe na.amra where ar moddhe bole diyechi id number hobe 0-9 abong name ta small letter hobe capital latter dile kaj korbe na)

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return 'id '.$id.'  name  '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


///// we can write where() more easyst way such as:
////(akhane amara khub sohoje oporer where() take likhechi abong akhane url ar moddhe 2 ta value eee pass korte hobe ta chara kaj korbe na abong where ar moddhe bole diyechi id ta Number hobe abong name ta  Alpha akhane capital latter ba small later jekono akta dilei hobe kaj korbe  )

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     return 'User Id '.$id.' Name '.$name;
// })->whereNumber('id')->whereAlpha('name');


//////OR 
///(akhane name ditei hobe ta chara aita kaj korbe na jodi amra {name?} abong $name=null ditam tahole name na dileoo akta blank page dekhato)

// Route::get('/user/{name}', function (string $name) {
//     return 'User Name: '.$name;
// })->whereAlphaNumeric('name'); ////akhane name jeita amra url a likhe hit korbo oita capital latter hole oo hobe small latter hole oo hobe aabar number hole ooo hobe .kew jodi capital latter small latter number aksathe dei taoo hobe .


/////OR
////(Url a id pass na korle aita kaj korbe na and id ta obossoi Uuid format a hote hobe)

// Route::get('/user/{id}', function (string $id) {
//     return 'User Id: '.$id;
// })->whereUuid('id'); /////Uuid means(Universally Unique Identifier) it's look like 123e4567-e89b-12d3-a456-426655440000


/////OR
///(akhane url a id pass na korle kaj korbe na and id ta Ulid format a hote hobe)

// Route::get('/user/{id}', function (string $id) {
//     return 'User Id: '.$id;
// })->whereUlid('id'); ///// Ulid means(Unique Lexicographically Sortable Identifier) it's look like 01ARZ3NDEKTSV4RRFFQ69G5FAV


////OR

///(jodi kew /category/ar pore amader define kora 'movie', 'song', 'painting' ai gulor moddhe je kono akta dei tahole kaj korbe kintu ai bairer kichu url ar maddhome pass korle 404 error dekhabe)
// Route::get('/category/{category}', function (string $category) {
//     return 'Category is: '.$category;
// })->whereIn('category', ['movie', 'song', 'painting']);


//// Global Constraints-------------------------

////(for this i have added Route::pattern('id', '[0-9]+'); this in my app/providers RouteServiceProvider under boot() function )
////(jehetu ami amar Route ar id ke aita '[0-9]+' diye set kore diyechi globali tai id jokhon ee ami use korbo ba url theke hit korbo id value ta jodi numarik na hoy tahole kaj korbe na )

// Route::get('/user/{id}', function (string $id) {
//     return 'User Id: '.$id;
// });


///// Encoded Forward Slashes---------------------
//// লারাভেল রাউটিং কোম্পোনেন্ট প্যারামিটারে / অক্ষর অনুমোদন দেয় না, তাই এই অক্ষরটি যদি প্যারামিটারের মধ্যে থাকতে হয়, তাহলে আপনাকে ঐ প্যারামিটারের জন্য একটি নির্দিষ্ট শর্ত সংজ্ঞায়িত করতে হবে এবং সেই শর্তে রেগুলার এক্সপ্রেশন ব্যবহার করতে হবে।
//// (amader {search} paramiter a amra / diye kichu pass korte parbo na karon route ai tar oonumoti dei na. kintu jokhon amara where('search', '.*') aita define kore debo tokhon amra paramiter ar moddhe / aita pass korte parbo )
//// (jodi amra where('search', '.*') aita add na kori tahole jokhon amra /search/ ar pore jokhon emon paramiter  http:/google.com pass korbo tokhon eeror dekhabe )

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');


/////// Generating URLs To Named Routes------------------
//////(hit /chack-user in your browser)

// Route::get('/user/profile', function () {
//     return 'test';
// })->name('profile');

// Route::get('/chack-user',[UserController::class,'show']) ;


////// AND ----------
////(passing paramiter)

// Route::get('/user/{id}/profile', function (string $id) {
//     return 'id: '.$id;
// })->name('profile');

// Route::get('/chack-user',[UserController::class,'another']) ;

///// OR------
////(passing multiple paramiter)

// Route::get('/user/{id}/{name}profile', function (string $id ,string $name) {
//     return 'Id: '.$id.'  Name:  '.$name;
// })->name('profile');

// Route::get('/chack-user',[UserController::class,'anotherWay']) ;



//////// Inspecting The Current Route----------------

// Route::get('/dip', [TestController::class,'handle'])->name('profile');



///////// Route Groups--------------------------------
////////(akhane ami route group korechi abong prefix ar moddhe dashboard name set kore diyechi abong ai group ar moddhe joto gulo / ache tar aage prefix ar value ta autometacally set hoye jabe jemon ee khane prefix ar value dashboard )

// Route::get('/', [DashboardController::class,'index']);

// Route::group(['prefix' => 'dashboard'], function () {
//     Route::get('/profile', [DashboardController::class,'profile']); //////jodi amra dashboard/profile diye hit kori tahole amra ai route ta dekhte pabo
//     Route::get('/settings', [DashboardController::class,'settings']);
     
// });


//////// Middleware------------------------------- 
 
// Route::middleware(['Gurd'])->group(function () { /////ami akta middleware create korechi GardMiddleWare name abong sheitake kernel.php te Gurd name set kore diyechi
//     Route::get('/main', function () {
//         return 'your middle ware working fine';
//     }); 
    
// }); 

// /////Authentication-(breeze)/////we need this code for Middleware practice
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



/////// Controllers---------------------------------
//////(jodi amra akta route ar group akoi controller use kore tahole amra ai vabe likhte pari)


// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::get('/orders', 'store');
// });


/////// Subdomain Routing ---------------------------
//////(Subdomain routing handel korar jonno  oooo Route group ar proyojon hoy)


// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function (string $account, string $id) {
//         return 'user Id:  '.$id;
//     });
// });



/////// Route Prefixes----------------------------------
//////(prefix diye akhane akta route group kora hoyeche abong prefix ar moddhe  amra je nam ta pass korbo shei nam ta / ar aage bose jabe.tai amader r likhte hoy na / ar aage)

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//         return 'hello';
//     });
// });


/////// Route Name Prefixes---------------------
//////(ai vabe name() diye prefix set korle amra jokhon eee amader name route take call korbo kothaw tokhon amake aage name prefix ar moddhe jei nam ta diyechi jemon admin tar por amar name route ar name dite hobe tahole oo oi name route take chinte parbe)
/////(akhane name() ar moddhe je admin diyechi tar por . dile valo hoy tahole amader bujte shubidha hobe ha aita mar admin prefix ar users name route jemon admin.users)

// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         return 'Hello i am from Route Name Prefixes';
//     })->name('users');
// });

// Route::get('/see',[TestController::class,'see']);


/////// Route Model Binding------------------------
////// Implicit Binding
/////(aitar output dekhar jonno database on korte hobe and .env file a giye database ar name thik ache ki na dekhte hobe karon oikhane jei database ar nam dibo amar migrations ar table gulo oidata base a create hobe)
////(tar pore oi database model ta route ar web.php ar opore likhte hobe)

// Route::get('/users/{user}', function (User $user) { ///// akhane /users/ar por jei id ta pass korbo url theke oi id ta $user ar moddhe store hobe and ooo dekhbe amar akhne (User $user) User model ar moddhe $user valiable ar value ta ache ki na
//         return $user->email;  /////jodi thake tahole $user->email ta return kore debe
// });



///// OR
////(amra url theke je parametter ta pass korbo id ta oita akhan theke UserController class ar getUser ar moddhe chole jabe )

//Route::get('/user/{user}', [UserController::class,'getUser']);



///////// Soft Deleted Models------------------------------------ 
////////(chack READEME.md)
 
// Route::get('/users/{user}', function (User $user) {
//     return $user->delete();
// })->withTrashed();


///////OR
// Route::get('/users/{user}', function (User $user) {
//     return $user->withTrashed()->get();
// });


//////OR

// Route::get('/users/{user}', function (User $user) {
//     return $user->onlyTrashed()->get();
// });


///////// Customizing The Key--------------------------
////////(chack README.md)
///////(akhane ami amar Post Model jeita ami opore use App\Models\Post; define korechi and oi Post Model theke email ta likhchi /posts/ar pore and she amake oi email ar puro row ta show korche) 

// Route::get('/posts/{post:email}', function (Post $post) {
//     return $post;
// });


////////OR

// Route::get('/posts/{post:slug}', function (Post $post) {
//     return $post;
// });

////////OR

// Route::get('/posts/{post:name}', function (Post $post) {
//     return $post;
// });


////////OR

// Route::get('/posts/{post:id}', function (Post $post) {
//     return $post;
// });
 

////////// jodi amra aita aivabe likhi tahole amra url theke jei id ta pathabo oita jodi amar Post model a na thake tahole she akta blank page return korbe 
// Route::get('/posts/{post:id}', function ($post) {
//     return Post::find($post);
// });


////////jodi amra aita aivabe likhi tahole amra url theke jei id ta pathabo oita jodi amar Post model a na thake tahole she akta page return korbe 404 error soho..aita hocche good way to do it

// Route::get('/posts/{post:id}', function (Post $post) {
//     return $post;
// });


///////// Custom Keys & Scoping-----------------------------------
 
// Route::get('/users/{user:email}', function (User $user) {
//     return $user;
// });
 

//////// Customizing Missing Model Behavior-----------------------
///////(jokhon arma route model binding kori tokon amar model ar moddhe data na thakle ooo bydefault akta 404 error show kore..amra jodi ai behebiou ta change kore chai tahole aivabe korte pari)

// Route::get('/',function(){
//     return view('welcome');
// })->name('welcome');        

// Route::get('/users/{id}', [UserController::class, 'CMMB'])
//          ->name('form') 
//         ->missing(function (User $user) {
//             return redirect()->route('welcome');
//         });


//////// Implicit Enum Binding-----------------
///////(for this i have created a new file app/Enums/Category.php and that file i have used here on the top)

// Route::get('/categories/{category}', function (Category $category) { ///// url a  Category enum ar value diye hit korle amra oita browser a dekhte pabo and oono kichu dile shita amader browser a 404 error dekhabe 
//     return $category->value;
// });



/////// Explicit Binding------------------------
//////(for this i have added Route::model('user',User::class); in RouteServiceProvider.php which is located in app/Providers)

Route::get('/users/{user:id}', function (User $user) {
    return $user;
});


/////// Customizing The Resolution Logic------------





////// Fallback Routes-----------------
/////(Fallback route ar kaj hocche user jodi eemon kono route a hit kore jita amader application a nei tokhon laravel bydefault 404 error dekhai and jodi amra bydefault 404 error na dekhate chai tahole Fallback Route ar sahajjo niye amra sundor kore akta page not found page create kore oita return kore dite pari )
////The fallback route should always be the last route registered by your application.

// Route::fallback(function () {
//     return 'the page not found';
// });


/////// Rate Limiting---------------------------------------
//////(Check READEME.md)
///// Defining Rate Limiters------------------
/////(ami app/Providers ar moddhe RouteServiceProvider.php ar moddhe akta notun RateLimiter create korechi jar nam custom_limit)
////(throttle method ta find korbe amader RouteServiceProvider.php boot() function ar moddhe je amader custom_limit name kono RateLimit ache ki na jodi thake tahole she oi kaj ta korbe)
////(throttle:5,1 ai vabe ooo amra throttle likhte pari 5 mane hocche 5ta request amader server accept korbe 1 miniutes ar moddhe. 5 ta ar beshi kew request korle error dekhabe) 
////(throttle ta  amader laravel application ar moddhe app/Http kernel.php ar moddhe bydefault vabe thake)
///(throttle  request ta handel kore)

// Route::get('/data',function() {
//     return 'hi';
// })->middleware('throttle:custom_limit'); ////akhane amar custom_limit ke call korechi middleware diye
// ///(aituku hoye gele php artisan optimize command run korte hobe karon amra kono update korlei ai command ta chalabo jodi kono update korar por ai command ta na chalai tahole amader update ta kaj korbe na)



////OR
////(amra amader RouteLimit take akta group baniye tar moddhe route gulo rakhte pari tahole ar moddhe thaka sob route RouteLimit ar awtai chole ashbe)

// Route::middleware(['throttle:custom_limit'])->group(function(){
    
//     Route::get('/',function(){ /////amader ai url gulo te perminits a 4 bare beshi kew request pathate parbe na ja amra RouteServiceProvider ar boot() ar moddhe set kore  diyechi
//         return view('welcome');
//     });
    
//     Route::get('/data',function() {
//         return 'hi';
//     });

// });


////OR

// Route::get('/data',function() {
//     return 'hi';
// })->middleware('throttle:dip');
// ///// run php artisan optimize command
 


//////// Form Method Spoofing------------------------------

// Route::get('/',function(Request $request){
//     return view('Form');
// });


////// Accessing The Current Route------------------- 
/////(akhane amra current route,currentRouteName,currentRouteAction gulo dd() kore dekhechi)

// Route::get('/test-route', function () {
//     $route = Route::current(); // Get the current route instance
//     $name = Route::currentRouteName(); // Get the current route name
//     $action = Route::currentRouteAction(); // Get the current route action
   
//     dd($route, $name, $action);
// })->name('test.route'); /////akhane amra sob data pabo kintu $action ar data pabo na karon amra akhane kono middle ware add kori nai...jodi kono middle ware add kortam tahole aikhane $action ar value ta ooo petam



/////// Cross-Origin Resource Sharing (CORS)
///(chack README.md)
