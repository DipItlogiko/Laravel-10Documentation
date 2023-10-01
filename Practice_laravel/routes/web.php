<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

/////////////// paginate() method ar bebohar

Route::get('/paginate',[TestController::class,'paginate']);

///////////// Customizing Pagination URLs

Route::get('/Customize',function(){
    $users = User::paginate(2); //////akhane amra amader User Model mane users table ..amra jani amader protita Eloquent Model database ar ak ak ta table ke represent kore..akhane User Model mane users table theke ami paginate() method ta ke call korechi and or moddhe ami 2 pass kore diyechi....akhon amade users table ar moddhe joto gulo data ache ar theke protibar amader ak ak ta page ar moddhe 2 ta kore data ar rows show korbe 

    

    return view('test2' , ['users'=>$users] );



});

///////////// Converting Results To JSON 

Route::get('/users', function () { /////// amra ai url a hit korle dekhte pabo amader jei output ta ashche oita JSON format aa asheche
    return User::paginate();
});


//////////////// Using Bootstrap
////////(check READEME.md)

Route::get('/bootstrap',[TestController::class,'bootstrap']);

