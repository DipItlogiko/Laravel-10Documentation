<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;
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

/////////////////// Creating Collections-----
/////////(check READEME.md)

Route::get('/', function () {
    $collection = collect([1, 2, 3]);  ///// amra aivabe collection create kori

    dd($collection); ////// amra browser aa dekhte pabo Illuminate\Support\Collection ai class ar akta instance create koreche amader [1,2,3] ai array ta karon amra ai array take collect() helper method ar moddhe likhe diyechi tai.....collect() method ar moddhe amra jei array take pass korbo collect() method Illuminate\Support\Support\Collection ai class ar akta instance create korbe collect() method ar vetore thaka array ar jonno 
});


///////////////// Extending Collections---------
////////////(check READEME.md for more information)

Route::get('/test', function () {

    Collection::macro('textUpper', function () { //////// akhane ami Collection class ar sathe akta method use korechi jar nam macro ai macro method ar kaj hocche oooo akta clouser accept kore and ai clouser ta execute hobe jokhon kew macro ke call korbe jemon ami amar ai mecro method ar akta name diye diyechi textUpper. aikhane je kono name dewa jai.jokon ami amar ai macro method take call korbo textUpper ai name tokhon ai macro mathod ar closure ta execute hobe
        return $this->map(function (string $value) {
            return Str::upper($value);
        });
    });

    $collection = collect(['first', 'second']);
 
    $upper = $collection->textUpper(); ////// akhane ami $collection->textUpper(); $collection ar moddhe je data gulo ache ta ami amar macro method ar closer ar moddhe pathiye dicchi $collection variable ar sathe macro method take call kore ->textUpper

    dd($upper);
});


//////////////////// Macro Arguments-----------

Route::get('/dip',function(){

    Collection::macro('toLocale', function (string $locale) {
        return $this->map(function (string $value) use ($locale) {
            return Lang::get($value, [], $locale);
        });
    });
     
    $collection = collect(['first', 'second']);
     
    $translated = $collection->toLocale('es');

    dd($translated);
});



///////////// Method Listing----------------------------
////////// all()
Route::get('/all',function(){
    $data = collect(['name' => 'dip', 'age' => '20', 'address' => 'Faridpur']);

    $all = $data->all();

    dd($all);
});


///////// avg()

Route::get('/avg',function(){

    // $average = collect([
    //     ['foo' => 10],
    //     ['foo' => 10],
    //     ['foo' => 20],
    //     ['foo' => 40]
    // ])->avg('foo');

    // dd($average);



   //////OR---------------------

//    $average = collect([1, 1, 2, 4])->avg();
//    dd($average);


   $average2 = collect([1, 1, 2, 4, 8, 7]);
   $result = $average2->avg();
   dd($result);



   


});




//////////////////////// Lazy Collections----------------

// Route::get('/lazy',function(){
//     $collection = Collection::times(40); ////// akhane amra Collection facadas ta use korchi ai ai Collection ar sathe akta method use korchi jar nam times ar kaj hocche ami () ar moddhe jei number ta diye debo oooo 1 theke oi number porjonto print korbe....jemon ai khane 1 theke 40 porjonto print korbe
    
//     foreach($collection as $col){
//         echo $col .'<br>';
//     }
 
// });


//////////// kintu ami jodi times(ar moddhe oonek boro number diye dei tahole ooo akta error dekhabe amader browser aa karon laravel ar je memori limitation ache amader collection gulo ke ram aa rakhar jonno and oigulo execution howar jonno shei memori limitation ta sesh hoye jabe ba overflow hoye jabe jodi amra aikhane beshi number dei tahole) 
///////(ai problem take amra Lazy Collection ar  maddhome solve korte pari)

// Route::get('/lazy',function(){
// $collection = Collection::times(922337203); ////////akhane times() amader oonek gulo callection create korbe ja amader laravel ar collection ar memory limite ar oopore chole jabe tai ai ta amader akta error throw korbe  
    
//     foreach($collection as $col){
//         echo $col .'<br>';
//     }
 
// });


/////////// solve this above problem with Lazy Collection
 
Route::get('/lazy',function(){
    $collection = LazyCollection::times(922337203);  
        
        foreach($collection as $col){
            echo $col .'<br>';
        }

        return 'Done';
     
    });

///////////// cursor()
/////(CHECK READEME.md)

Route::get('/dip',function(){
    $allUser = User::all();/////// akhane amader database ar users table aaa joto user ar data ache sob ak sathe amader laravel ar memory storage a load hobe. jokhon amader ai table aa lakh lakh user ar data thakbe tokhon  amra aivabe korle amader laravel ar memory storage limitation cross hoye jabe and amader akta error dekhabe tai amra aita ke aivabe na kore Lazy Collection ar cursor method ar  maddhome korbo
    dd($allUser);
}); 


// Route::get('/cursor',function(){
//     $allUser = User::cursor();/////// ai cursor() method ta Lazy Collection ar akta instance create korbe User model ar jonno....akhon jodi amar users table a 10 lokkho ba 1 billion  oooo data thake tahole ooo amader laravel ar memory storage limitation cross hobe na. 
//     dd($allUser->first()); ///// aikhane ami amar $allUser variable ar moddhe je data gulo ache or moddhe first a je data ta pabe ta show korbe
// }); 

/////OR-------
Route::get('/cursor',function(){
    $allUser = User::cursor();/////// ai cursor() method ta Lazy Collection ar akta instance create korbe User model ar jonno....akhon jodi amar users table a 10 lokkho ba 1 billion  oooo data thake tahole ooo amader laravel ar memory storage limitation cross hobe na. 
    
    foreach($allUser as $user) /////// jehetu $allUser variable ar moddhe akta array pabo rrrr amra jani amra jokhon kono array ar value ke print korbo tokhon amra foreach loop use korbo
        echo $user->name .'<br/>';
}); 



/////////////////// text file handel with lazy collection---------------------------

Route::get('/textFile',function(){

    $collection = LazyCollection::make(function(){ /////// akhane akta Lazy Collection make kora hoyeche LazyCollection fasad ar sathe make method ta ke call kore.
        $handle = fopen(storage_path() . '/logs/laravel.log', 'r'); /////fopen() ai ta hocche php ar akta function jar maddhome amra kono file ke open kori r tar por 'r' mane ami bole dilam ami ai file take read korte chacchi

        while (($line = fgets($handle)) !== false) {
            yield $line;

        }

    });

    foreach ($collection as $line) //////jehetu $collection variable ar moddhe akta array ke pabo r amra jani kono array ar value print korte amara foreach ba forelse loop use kori
      echo $line."<br/>";


   
});




