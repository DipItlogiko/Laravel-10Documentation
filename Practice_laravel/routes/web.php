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


//// Row php example----------------
// class ExampleClass{
//     public function saySomething(){
//       return 'Hello Bangladesh';
//     }
//   }

// $obj = new ExampleClass(); /////non static method take call korte hole tar class take ai vabe object create kore nite hoy

// dd($obj->saySomething());


//// OR-------------------------------

// class ExampleClass{
//     private function saySomething(){
//         return 'Hello Bangladesh';
//     }

//     public static function __callStatic(string $name, array $arguments)
//     {
//         return call_user_func_array([new static , $name] , $arguments);
//     }
// }

// dd(ExampleClass::saySomething());


/////// How laravel facade works example------------

class  ExampleService{
    public function saySomething(): string
    {
        return 'Hello Dip';
    }
}

class ExampleServiceFacade extends Facade{

    public static function getFacadeAccessor(): string
    {
        return "exampleService";
    }
    
}


class Facade{

   public static function __callStatic(string $name , array $arguments)
   {
      //dd($name);
      //dd($arguments);
      return app(static::getFacadeAccessor())->$name(...$arguments);
   }

   public static function getFacadeAccessor(): string 
   {
    return "";
   }
}

app()->bind("exampleService",function() {  ////akhane ami bind ar maddhome service container a add korechi
    return new ExampleService(); //// new ar maddhome ExampleService ar akta instance create kore service container a add kore rakhbe 
});


//dd(app()->make("exampleService")); ///// service container a bind kora ba add kora service gulo dekhar jonno ba retrait korar jonno amra make mathod use kori
//dd(app('exampleService'));
/////facade--------------------
//dd(ExampleServiceFacade::saySomething());
dd(ExampleServiceFacade::saySomething(125684,568)); ////uncomment //dd($name);
//dd($arguments); and watch browser







// Route::get('/', function () {
//     dd(Config::get(key:'app.name'));////non static method take amra akhane static vabe call korchi ////it's comes from vendor laravel/framework/src/illuminate/Config/Repository.php 
    
// });
