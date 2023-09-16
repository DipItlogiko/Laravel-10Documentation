<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IfStatementController;
use App\Http\Controllers\CheckController;
use Illuminate\Support\Facades\Blade;
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


////////////// Displaying Data--------------

Route::get('/', function () {
    return view('welcome', ['name' => 'dip']);
});


//////////// HTML Entity Encoding------------------
//////(for this practice i have written come code into the AppServiceProvider under the boot() method)

Route::get('/home', function () {
    return view('home');
});


////////// Displaying Unescaped Data--------------------

Route::get('/test3', function () {
    return view('test3', ['name' => '<b>DIP</b>']); ////// akhane ami name pass korechi html tag soho jodi ami amar view file a ai name variable take {{ $name }} diye call kori tahole ooo html ar tag soho amader browser a show korbe 
});


/////////// Blade & JavaScript Frameworks------------------------

Route::get('/blade', function () {
    return view('test');
});


//////////// Rendering JSON----------------------------

Route::get('/array-to-json', function (){
    $array=['name' => 'dip', 'roll' => 5]; //// aita akta associative array karon ai array ar moddhe key value pairs a data ache 

    return view('arrayToJson',['array' => $array]);
});


/////////// The @verbatim Directive-----------------------
//////(Check READEME.md before watching this practice)

Route::get('/verbatim', function () {
    return view('verbatim');
    
});


//////////// If Statements--------------------------------

Route::get('/IfStatement', function () {
    $array=[1,5];
    return view('ifStatement',['array' => $array]);
});


////////// @unless directive------------------------------

Route::get('/authentication-status', function () {
    return view('authentication_status');
});


///////// @isset directive--------------------------------

Route::get('/isset', function () {
    $name = 'dip';
    return view('isset',['name' => $name]);
});


///////// @empty directive--------------------------------

Route::get('/empty', function () {
    $name = 'dip';
    return view('empty',['name' => $name]);
});

///////// Environment Directives---------------------------
///////(@production Directive)

Route::get('/demo',function () {
    return view('demo');
});


///////(@env() Directive)

Route::get('/env',function () {
    return view('env');
});

//////////////// Section Directives--------------------------
///////(Check READEME.md)
/////// (@hasSection())

Route::get('/section',function(){
    return view('section');
});


//////(@sectionMissing())

Route::get('/hasSection',function(){
    return view('hasSection');
});


//////////////// Switch Statements-----------------------------

Route::get('/switch',function(){
    $status ='Pending'; 
    //return view('switch',['status' =>$status]);
    //or
    //return view('switch',compact('status'));
    //or
    return view('switch')->with('status',$status);
});


////////////// Loops--------------------------------------------

Route::get('/loop',function(){
    $students =['dip','dibbo','rahul','rija'];
    $users = ['one' =>'Pranto', 'two' =>'Shanto', 'three' =>'Bappa'];
    return view('loop',['students' => $students , 'users' => $users]);
});


////////////// (@continue and @break)-------------------

Route::get('/ContinueAndBreak',function(){
    $students =['dip','dibbo','rahul','rija','jon','david','rose'];     
    return view('ContinueAndBreak',['students' => $students]);
});


//////////// Conditional Classes & Styles--------------------------
////////(@class blade directive)
///////(chack READEME.md)

Route::get('/class',function(){
    return view('class');
});


//////////(@style blade directive)

Route::get('/style',function(){
    return view('style');
});


//////////// Additional Attributes---------------------------------

Route::get('/check/{userId}', [CheckController::class,'showUser']);


////////////// Including Subviews----------------------------------
//////(chack READEME.md)



//////////// Rendering Views For Collections-------------------------
//////(chack READEME.md)
/////( @each() blade directive )

Route::get('/each',function(){
    $jobs=['airline','railway','navay','bank','college','school'];
    //return view('each',compact('jobs'));
    //OR
    //return view('each',['jobs' => $jobs]);
    //OR
    return view('each')->with('jobs',$jobs);

});



///////////// The @once Directive-------------------------------------
//////(chack READEME.md)

Route::get('/once',function(){
    return view('once');
});


//////@pushOnce() blade directive--
//////(chack READEME.md @once())

Route::get('/pushOnce',function(){
    return view('pushOnce');
});


//////////////// Components-------------------------------------------
////////(chack READEME.md)
////(for this practice i have created a class component which name is input )

Route::get('/component',function(){
    return view('form');
});


//////////////// Manually Registering Package Components--------------------------
////////(for this practice i have created a new class based component which name is Input which is located into the app/view/components/Form/Input.blade.php and resources/views/components/form/input.blade.php and i also created a new provider into the app/proviers which name is PackagesServiceProvider)

Route::get('/packageComponent',function(){
    return view('PackageComponent');
});


////////////// Passing Data To Components------------
//////(concept is same with Components that whay i didn't  execute code)
//////(check READEME.md)   


///////////// Component Methods-------------
//////////// i have used Component methods in /component route that's why i didn't do that aagain 


/////////// Accessing Attributes & Slots Within Component Classes

Route::get('/test8',function(){
    return view('Test8');
});


////////////// Component Attributes-----------------------------
///////(check READEME.md)

Route::get('/attributes',function(){
    return view('Attributes');
});


//////////////// Retrieving & Filtering Attributes---------------

Route::get('/filtering',function(){
    return view('Filtering');
});


///////////////// Slots-------------------
////////(check READEME.md)

Route::get('/slots',function(){
    return view('slots');
});

///////////// Inline Component Views------------------------------
///////////(check READEME.md) 
Route::get('/inline',function(){
    return view('inline'); 
});


//////////// Defining The Layout with Component
///////////(check READEME.md)
///////(for this practice i have created an anonymous component which component comes only with blade file)

Route::get('/component',function(){
    return view('component');
});


//////////////////// Applying The Layout Component---------------------------
///////////(for this practice i have created an anonymous component which comes only with blade file)

Route::get('/tasks', function () {
    $tasks = ['PHP', 'LARAVEL', 'JAVASCRIPT'];
    return view('tasks', ['tasks' => $tasks]);
});

/////////////////// Rendering Inline Blade Templates--------------------------------

Route::get('/render',function(){

  return Blade::render('Hello, {{ $name }}', ['name' => 'Julian Bashir']);

}); 


////////////////// Rendering Blade Fragments-----------------------------

Route::get('/bladeFragments',function(){
    
    return view('bladeFragments')->fragment('dialog'); ////////// akhane ami bladeFragments view file ar moddhe @fragement('dialog') name akta area set korechi and aikhene ami return view('bladeFragments')->fragment('dialog') bole diyechi amar bladeFragments ai view theke fragment('dialog') ai area ta shudhu return korba....joi ami fragment(am moddher nam likhte vul kori tahole oo kono eerror debe na kintu amar oi page ar sob dekhabe )
});