<?php

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

///////////////////laravel ar default log ar practice-------------------
/////////////(check SOME IMPORTANT THINGS section of READEME.md)

Route::get('/log', function(){
    \Log::info('This is my testing log and the user id is 1'); ///// ai /log url a hit korar pore amra dekhte pabo je amader storage/logs ar moddhe lavavel.log ar moddhe ai message ta print hoye geche 

   return 'done';
});


//////////////// creating a custom log (config/logging.php)

Route::get('/custom-log', function(){
      \Log::channel('customlog')->info('this is my custom log file.'); ////// jokhon amra custom kono channel create korbo config/logging ar moddhe tokhon oi custom channel ta ke dhorar jonno amra channel('ar_moddhe_amra_custom_jei_channel_ta_create_korechi_channels_ar_moddhe_tar_key_name_ta_bole_dite_hobe') and ami amar custom channel ar moddhe akta lavel set korechi info name and oi lavel info ar value hishebe ami aikhan theke akta message pathacchi....and ai log message ta jabe amader coustom log ar moddhe jei file ta ami create korechi amar config/logging.php ar channels array ar moddhe je custom akta chennel create korechi tar moddhe path ar moddhe ami akta file create korte bolechi and oi log file aa ami amar info ar message ta pass korchi

      //////OR-----------------
      //\Log::channel('customlog')->info('the contact form submited by'.Auth::id());///// amra ai vabe oooo authentication user ar id take amader log file a store kore rakhte pari je kon user amar ai form ta submit koreche 

      return 'done';
});