<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;


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
    $collection = collect([1, 2, 3]); 

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



