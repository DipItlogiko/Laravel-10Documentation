<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Flight;
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

/////////// Retrieving Models------------ 

Route::get('/test', function () {
     
    foreach (Flight::all() as $flight) { ///// foreach loop ta amra use kori kono array ar value print korar jonno. amra forelse loop oo use kori kono array ar value print korar jonno ....forelse loop ar akta shubidha holo amra ai loop ar else ar moddhe bole dite pari akta message ba string jodi amader array ta empty hoy tahole oi else ar moddhe amra jei message ba string ta likhe rakhbo oi string ta amader dekhabe jemon oi message ba string ta hote pare  your array is empty!!!!
        echo $flight->name .'</br>';  
    }    
});


Route::get('/test2', function () {
     
    foreach (Flight::cursor() as $flight) { ///// foreach loop ta amra use kori kono array ar value print korar jonno. amra forelse loop oo use kori kono array ar value print korar jonno ....forelse loop ar akta shubidha holo amra ai loop ar else ar moddhe bole dite pari akta message ba string jodi amader array ta empty hoy tahole oi else ar moddhe amra jei message ba string ta likhe rakhbo oi string ta amader dekhabe jemon oi message ba string ta hote pare  your array is empty!!!!
        echo $flight->name .'</br>';  
    } 
    
    dd(Flight::cursor());
});


///////////////////// Mass Assignment-------------------------

Route::get('/mass-assignment',function(){

    $flight = Flight::create([  ////////// akhane ami amar Flight model ta use korechi mane Flight model ta jei database ar table ke represent kore oi table ar sathe ami create() method ar maddhome amra amader database ar oi table aaa kichu data pathiyechi....jodi amra aivabe create() ar maddome amader table a data set kori tahole amader ai table take jei model represent korche oi model ar moddhe giye fillable ar array ar moddhe arma  define kore dite pari amader kon kon column ar data gulo shudhu matro amader table aa add hobe...create method ar maddhome amra data amader database aa save korte chaile amra aita korte pari. go to this model file 
        'name' => 'London',
        'age' => '25',
        'number' => '0154854897451',  //////akhane amader number column ar jei value ta diyechi ai value ta amader ai model jei table ta represent korche oi table save hobe na karon amra ai column ke amader ai model ar fillable array ar moddhe likhi ni tai ai column ar value amader oi table aaa save hobe na
         
    ]);  

    return 'Done!!! Check Your Database';
});


////////////////////////// Global Scopes------------------------

Route::get('/GlobalScopes',function(){
    

    ////////return User::byid()->get();
    dd(User::byid()->toSql()); ///// toSql() method ta amader Sql query command return kore. akhane ami User::byid() akhen User model theke ami amar Local scope ar nam dhore call korechi ami amar User model ar file ar moddhe gele dekhte pabo oikhane ami scope ar pore Byid diye akta local scopes create korechi oikhane amra prothom ookhor boro hater diyechi kintu amra aikhane chotohater dibo.....akhon jokhon ami aikhane amar oi Local Scopes take call korechi tokhon amader oi local scopes ar moddhe je query set kore rekhechi shudhu oi queary tai execute howar kotha kintu ami amar User model ar file ar moddhe akta global scopes create kore or moddhe add kore rekhechi tai jokhon eee ami kono local scope ke call korbo jei local scopes ami amader User model ar moddhe set korchi tokhon oi local scopes ar sathe amader oi global scope ar queary ooo run hobe

    
});

