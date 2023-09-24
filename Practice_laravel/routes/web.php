<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\InMemory\InMemoryFilesystemAdapter;


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
//////////////////// The Local Driver------------
Route::get('/', function () {
    Storage::disk('local')->put('example.txt', 'hi i am dip ghosh'); ////// ami akhane Storage fasads theke disk() method take call korechi and disk(ar moddhe amar akta disk ar nam diye diyechi ai disk ar nam gulo amra config/filesystems.php ar moddhe pabo and aikhane jei disk ar nam bole debo oi disk ar root a je path ta dewa ache tar moddhe sob kichu chole jabe ja amra put(ar moddhe diye debo jemon ami akhane akta example.txt file pathiyechi and ai file ar content hobe hi i am dip ghosh)  
    return  'Done';
});


////////////////// The Public Disk---------------

Route::get('/public',function(){
    Storage::disk('public')->put('dip.txt', 'Hello dip!!!'); ////// ami aikhane public disk ar moddhe akta text file ke rekhechi and oi text file ar content hocche Hello dip!!! and amra jodi config/filesystems.php ar moddhe jai tahole dekhte pabo amader public disk ar file gulo kon path a store hobe ...config/filesystems.php ar public disk oonujayi  ai file gulo (storage/app/public) ar moddhe giye store hobe. kintu public disk ar file gulo web browser theke publically use  kora jai tar jonno amader web.php te ai kaj ta korar por (php artisan storage:link) ai command ta chalate hobe  tahole amra dekhte pabo amader storage/app/public theke file gulo chole jabe amader application ar public directory ar moddhe storage name akta directory create hobe and oi directory ar moddhe amar sob file chole ashbe tar por ami chaile oi file take web browser theke publically access korte parbo (http://127.0.0.1:8000/storage/file_ar_name_ta_likhe_dite_hobe_akhane) jei file ar nam ta likhe dibo oi file ta amra amader browser a dekhte pabo    return 'Done';
});


////////////// Scoped & Read-Only Filesystems-------

Route::get('/scoped',function(){
    Storage::disk('s3-videos')->put('videoInfo.txt','it\'s your birthday video!!!');
    return 'done';
});



//////////////// On-Demand Disks---------------
////////(check READEME.md for more information)

Route::get('/on-demand',function(){

    $disk = Storage::build([ //////// akhane ami Storage Fasads theke build() method ta ke use korchi akta on-demand disk create korar jonno...
        'driver' => 'local', 
        'root' => storage_path('app/dip'), ///// storage_path mane akhane storage directory take bojhano hocche....storage directory ar moddhe app/dip name akta directory create kore tar moddhe amader ai file ta chole jabe 
    ]);

    $disk->put('dibbo.txt', 'i am dibbo!!!');

    return 'done';
});


////////////// Retrieving Files-----------------

// Route::get('/get',function(){

//     $contents = Storage::get('example.txt'); ////akhane jemon ami Storage:: Fasads  ar sathe sorasori get() method take call korchi tai mai get ar moddhe jei file ar nam ta dibo mane ami jei file ta get korte chacchi oi file take khujbe amader bydefault je disk define kora ache  'local'  .env and config/filesystems.php te ....and oi local disk ar root ar path a jodi amar example.txt ai name kono file thake tabole browser aaa amara oi file ar content ta dekhte pabo

//     return $contents;
// });


/////////////////// OR-----

Route::get('/get',function(){

    $contents = Storage::disk('public')->get('dip.txt');  ///// akhane ami public storage theke akta file get korte chacchi get ar moddhe amra jei file ar nam ta diye debo oi file ta jodi thake amader public disk ar root path ar  moddhe tahole amra aita amader browser a dekhte pabo jodi na thake tahole ooooo null return korbe 

    return $contents;
});



////////////////////  File Metadata-------------------------

// Route::get('/File',function(){
//     $size = Storage::size('example.txt'); /////jehetu ami aikhane sorasori Storage:: Fasads ar sathe size() method ta use korechi and size(ar moddhe jei file ar nam bole debo ) Storage amader bydefault je disk set kora ache 'local'  .env and config/filesystems.php te oi local disk ar root path a giye check korbe je amra aikhane je file ar nam diyechi oi file ta amader root path ar moddhe ache ki na jodi thake tahole oi file ar size ta amader bole debe file ta koto bytes ar.
//     return $size .' bytes';
// }); 


///// OR-----

// Route::get('/File',function(){
//     $size = Storage::disk('public')->size('dip.txt'); ///// akhane ami size(ar moddhe je file ar nam ta bole diyechi) ai file ar nam ta amader public disk ar root patha aa giye dekhbe ai name kono file ache ki na jodi thake tahole oooo oi file ar size ta amader akhane bole debe bytes aaa
//     return $size .' bytes';
// }); 
 

///// lastModified()---

Route::get('/File',function(){
    $modify = Storage::lastModified('example.txt'); ////// jehetu ami aikhane Storage:: Fasads ar sathe sorasori lastModified() method ta use korechi and ai lastModified(ar moddhe amar je file ar nam diye debo) oi file ta amader default je disk ta set kora ache 'local' amader .env and config/filesystems.php ar moddhe .. oi local disk theke check korbe amader ai file ta ki local disk ar root path ar moddhe ache ki na jodi thake tahole oooo  oi file ar lastModified date ta return korbe UNIX timestamp ai format aaaa
    return $modify;
}); 


/////OR--------

// Route::get('/File',function(){
//     $modify = Storage::disk('public')->lastModified('dip.txt');////// akhane ami lastModified(ar moddhe je file ar nam ta diyechi) ai lastModified() method ta dekhbe ai file ta last kobe modify kora hoyechilo and ooooo akta UNIX timestamp return korbe
//     return $modify;
// }); 



//////////////////////////// Prepending & Appending To Files-----------------------
///////////(check READEME.md)

// Route::get('/pre',function(){
//     Storage::prepend('file.txt', 'Prepended Text');///// jehetu ami Storage:: Fasads ar sathe sorasori prepend() method ta use korechi tai ai prepend() method ta amader bydefault je disk set kora ache 'local' amader .env and config/filesystems.php te oi local disk ar root path a giye dekhbe amader ai file.txt file ta ache ki na jodi thake tahole oooo oi file ar akdom first aa ai content ta add kore debe....
//     return 'done';
// });

///////OR--------

Route::get('/pre',function(){
    Storage::disk('public')->prepend('dip.txt', 'Prepended Text'); ////// akhane ami disk ta specific kore diyechi 
    return 'done';
});



////////////////////// Other Uploaded File Information----------------------------

Route::get('/get-form',function(){
    return view('form');
});

Route::post('/post',function(Request $request){
     
        $file = $request->file('avatar'); ////amader input field name='avatar' jei form theke ashche oi form a jodi amra aita enctype="multipart/form-data" na likhi tahole amader file() ai method kaj korbe na ......and file(ar moddhe jei name ta ache ai name ta hocche amader akta form ar file input field ar name......name='avatar' oi file field ar file ta amra akhane  amader $file variable ar moddhe store korechi  ) 
        
        //$name = $file->getClientOriginalName(); /////// akhane ami amar file ar original name ta check korechi
        //dd($name);

        //$extension = $file->getClientOriginalExtension();//// akhane ami amar file ar extension ta check korchi.
        //dd($extension);
         
        ////(getClientOriginalName and getClientOriginalExtension methods are considered unsafe, as the file name and extension may be tampered with by a malicious user that's why we will use belows things)
        ////////////////////OR-----------------------

        $name = $file->hashName();
        //dd($name);
        $extension = $file->extension();
        dd($extension);

    

})->name('store.data');



////////////////////// Directories---------------------------
////////////// Get All Files Within A Directory
///////////(check READEME.md)

// Route::get('/files',function(){     

//     $files = Storage::files(); /////jehetu ami akhane Storage:: Fasads ar sathe sorasori akta method use korchi tahole aita bydefault local disk take use korbe and local disk ar root path dhore jabe and oi directory te shudhu koita  file ache oigulor akta array amader return korbe.oi directory te jodi kono subdirectory thake tahole files() method sehi gulo amader dekhabe na shudhu file gulor akta array amader return korbe.. 

//     dd($files);
// });


//// OR------

Route::get('/files',function(){     

    $files = Storage::disk('public')->files(); /////// akhane ami disk take specific kore diyechi public.... public disk ar root path dhore jabe and oikhane je directory ta pabe tar moddhe theke shudhu jotogulo file ache tar akta array amader return korbe karon ami akhane files() method ta use korechi.

    dd($files);
});


////////////////// allFiles()----


// Route::get('/allFiles',function(){     

//     $files = Storage::allFiles();  /////jehetu ami akhane Storage:: Fasads ar sathe sorasori akta method use korchi tahole aita bydefault local disk take use korbe and local disk ar root path dhore jabe and oi directory te koita  file ache and koita subdirectory ache oigulor akta array amader return korbe... 

//     dd($files);
// });


//////// OR----

Route::get('/allFiles',function(){     

    $files = Storage::disk('public')->allFiles(); /////// akhane ami disk take specific kore diyechi public.... public disk ar root path dhore jabe and oikhane je directory ta pabe tar moddhe theke jotogulo file ache and jotogulo subdirectory tar akta array amader return korbe karon ami akhane allFiles() method ta use korechi.

    dd($files);
});





