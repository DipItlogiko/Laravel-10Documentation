<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(Request $request)
    {   
        dd($request->query()); ///// akhane amar request theke asha sob data akta associative array ar moddhe dekhabe 
        dd($request->query('name')); ////akhane ami amar request theke queary method call korechi jar fole amar request ar sob input field ar value gulo akta array ar moddhe dekhabe akhane ami chaile queary() method ar moddhe key pass korte pari mane ami amar input field ar name var vlaue ta akhene key hishebe pass korte pari jemon query('name') ba query('address') 
        dd($request->query('name','dip')); ////akhane ami bole diyechi  jodi amar input ar name ar value jodi kichu na dei tahole bydefault dip niye nebe.
    }


    public function form(Request $request)
    {
        return view('form');
    }


    public function submit(Request $request)
    {
       // dd($request->all());//// akhane ami amar request theke sob data gulo pabo associtave array hishebe 

        //dd($request->collect()); //// akhane amader request ar data gulo ke akta collection akare dekhabe 
        
        ////// OR-----------

        $request->collect('users')->each(function (string $user) {
            // ...
        });
    }

     
    public function post(Request $request)
    {
        //$name = $request->input('address');
        //dd($name); /// request theke amar je input field ar name ar value address diwa ache tar value ta akhane dhorbe and print korbe


        // $address = $request->input('address', 'dip'); /////akhane amar input field ar name ar valu jeitai address ache jodi oitar value na dei tahole bydefault dip print korbe 
        // dd($address);

        $input = $request->input(); ///// aikhae amar request theke asha sob value gulo akta associative array ar moddhe pabo.
        dd($input);


    }


    public function getProductName(Request $request)
    {
        $name = $request->input('products.0.name');///// akhane products theke 0 index a jai name ar value ache oita dekhabe ///// if you hit your browser http://localhost:8000/practice?products[0][name]=ProductA you will get the product name


        return "Product Name: $name";
    }

     

    public function getProductName1(Request $request)
    {
        $names = $request->input('products.*.name'); //// akhane products theke sob name dekhabe ////jodi ami http://localhost:8000/test?products[0][name]=Laptop&products[1][name]=Smartphone&products[2][name]=Headphones


        return "Product Names: " . implode(', ', $names); ///// akhane protita products name ar por akta kore koma hobe shei tai ami implode(', ', $names) ai khane bole diyechi
    }

    public function getProductName2(Request $request)
    {
        $input = $request->input();

        dd($input);
    }

    public function show()
    {
        return view('stringable');
    }

    public function processName(Request $request)
    {
        $name = $request->string('name') ; //////akhane trim() method ar kaj hocche amr input ar value te jodi kew space dei tahol she oi space gulo count korbe na...jodi amra trim() method ta use na kori tahole kew jodi input ar value te space dei tahole ooo space gulo count korbe....laravel a bydefault trim() global middleware thake tai amder r aita kora lage na...middleware ta ache app/Http/kernel.php ar moddhe global middleware ar moddhe \App\Http\Middleware\TrimStrings::class, ai name. ai practice ta korar aage ami oi middleware ta comment kore niyechi comment na kore nile oi global middleware ta autometic string ke trim kore nebe and ami aikhane trim() method ar kaj ta bujte partam na  
        dd($name);

        // You can now use the $name variable for further processing or return it as a response.
    }

 
}
