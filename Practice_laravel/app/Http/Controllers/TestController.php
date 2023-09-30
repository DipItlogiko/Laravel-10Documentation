<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get(); /////// amra jemon SQL a likhtam (SELECT * FROM users;) tahole amader users table theke sob data amader dekhato thik ai same kaj ta amra database QueryBuilder ar maddhome korechi tar jonno amra aage akta DB fasads ke use korechi oopore and tar pore amra bole diyechi kon table theke amra data dekhte chacchi oi table ar nam...and tar pore ami get() method take use korechi ai get() method ta amader oi table theke sob data aane amader dekhabe mane amra oi table ar data guloke read korte parbo. 
          
        //return $users;
        return view('welcome',['users' => $users]);
    }

    public function test()
    {
        //$users = DB::table('users')->where('name','dibbo')->first(); /////akhane ami bolechi amar users table theke jekhane name column ar value dibbo ache oita ke prothome aaano....first() method likhle r get() likhte hoy na ..first() ar maddhomei amra data read korte parbo ta data read korar jonno amader get() lekhar dorkar nei.

        //return $users->email; ///// $users ar moddhe jehetu amader table ar jei column ar name field dibbo ache oi row ta chole ashbe amader $users variable ar moddhe and amra ai $users variable ar moddhe theke email take print korchi


        ////////// OR-----------------

        //$users = DB::table('users')->where('name','dibbo')->value('email'); /////akhane ami bolechi amar users table theke jekhane name column ar value dibbo ache oi row theke email ar value take niye ashbe karon amara value() ar moddhe email field ar nam bole diyechi value('email')

        //return $users;


        ///////// OR-----------------

        $user = DB::table('users')->find(3); ////// akhane amader users table ar sathe find() method ta add kore diyechi and ai find() method ar moddhe amra akta number diye diyechi akhon amader find() method ar moddhe amra jei number ta diyedebo oi number oonujayi ooo check korbe amader users table ar id te ai number aa kono id ache ki na jodi thake tahole oi id ar value gulo ooo print korbe... 

        return $user;

        



    }



    public function test2()
    {
        //$names = DB::table('users')->pluck('name'); /////// akhane ai pluck() metho ar moddhe amra amader jei column  ar nam diye dibo oi column ar value guloke akta array ar moddhe rekhe amader pass kore debe ai pluck() method...mane pluck() akta array return kore. 

        //return $names;



        /////////////////OR-------------


        $names = DB::table('users')->pluck('name','email'); /////// akhane ai pluck() metho ar moddhe amra 2ta  column  ar nam diye diyechi amra last aa jei column ar nam diyechi oita hobe amader key and first aa amra je column ar nam diyechi oita hobe amaver value...amra pluck() ar moddhe 2ta ar beshi column ar nam dite parbo na higiest 2 tai eee dite parbo...jokhon amra 2 ta column ar nam pluck() ar moddhe pass korbo tokhon pluck() amader key value akare value gulo return korbe

        return $names;





    }


    public function test3()
    {
        // $users = DB::table('users')
        //    ->select('name', 'email as user_email')
        //    ->get(); //////akhane ami users table theke select korechi name column and email column and ai 2 ta column ke ami read korbo tai get() method ke use korechi and amader aikhane email column ar name ta dekhabe user_email karon ami email ar pore bole diyechi amar email column ta user_email name dekhabe jokhon get() korbe ba amader data ta dekhabe tokhon.


        // return $users;   


        /////// OR-------------

        // $users = DB::table('users')->distinct()->get();

        // return( $users );


        //////// OR------------

        $query = DB::table('users')->select('name'); //////akhane ami users table theke name column take select korechi
 
        $users = $query->addSelect('email')->get(); //////$query variable ar moddhe amader users table ar name field ar value gulo ache and akhane ami $query ar sathe r ooo akta select add kore diyechi addSelect likhe and amader name ar sahte email gulo oooo dekhabee karon ami  akhane name ar sathe addSelect('email') diye email take ooo add kore diyechi amader name ar sathe.

        return $users;


    }


    public function test4()
    {
        $result = DB::table('users')
        ->where('name', '=', 'dip')
        
        ->get();


        return $result;
    }


    public function debug()
    {
        //DB::table('users')->where('id' , 1)->dd(); /////akhane amader database quearybuilder code ar RawSql command soho sob information dekhabe...dd() method take call korle dd() method ta execute hoyar por or niche jodi r ooo code thake ta r execute hobe na....

        DB::table('users')->where('id', 1)->dumpRawSql();//////// akhane database quearybuilder code ar shudhu RawSql command ta dekhabe...dump() method take call korle dump() method execute hoyar por oor niche jodi kono code thake ta execute hobe.

         
    }
}
