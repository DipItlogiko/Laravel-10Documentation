<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phon;

class PhonController extends Controller
{
    public function saveDataIntoDatabase()
    {
        $phons = new Phon;  

        $phons->number = '01852364712';


        $users = new User;

        $users->name = 'piqu';
        $users->email = 'piqu@example.com';
        $users->password = '787874854';

        $users->save();

        $users->phon()->Save($phons);  //// amader phons table ar moddhe datatake ai vabe save korar karon hocche amader users table and phons table ar sathe One To One Relationship kora ache and amader users table ta hocceh parents table and phons table ta hochhe amader child table tai amader child table ar moddhe mane phons table aa jokhon eee kono data save hobe amader parentes table users table hoye tar pore amader child table phons ar moddhe datata save hobe...and aikhane phon() ai method ta amader User model ar moddhe theke ashche ai phon() method ar moddhe amder relation ta kora ache


    }

    public function showData($id)
    {
        //--akhane amra user id ar oopor base kore amader phon ar data ta peye jacchi karon amra User model ar moddhe users table ar sathe phons table take relation kore diyechi One to One relationship ar maddhome--//
        $data = User::find($id)->phon;  //// akhane amader User Model ta database ar jei table take represent kore oi table theke mane users table theke id diye match korbe and oi id ar opore base kore amader phon ar data ta dekhabe ...phon mane hocche amader User model ar moddhe amra phon() method ar moddhe jei relation ta korechi oi method ar nam
        dd($data);
    }



    //--akhane amra phons table ar id ar oopor base kore amader users ar data ta peye jacchi karon amra Phon Model ar moddhe Inverse Of The One To One Relationship korechi tai mane amader phons table ar sathe users table ar relation korechi tai--//
    public function showuserData($id)
    {
        //--akhane amra phons table ar id ar oopor base kore amader user ar data ta peye jacchi karon amader Phon Model ar moddhe amra Phon  Model mane phons table ar sathe users table ta ke Inverse One To One Relationship kore diyechi ..Inverse mane hocche biporit amra aage amader User model ar sathe mane users table are sathe phons table take One To One relationship korechi and User model ar moddhe and tar pore amra Phon Model ar moddhe phons table ar sathe users table ar Inverse One To One  relationship kore diyechi mane akhon phons table ar sathe users table take represent kore diyechi mane ulto relation korediyeci ai inverse One To One Relationship ar maddhome--//
        $data = Phon::find($id)->user;  //// akhane amader Phon Model ta database ar jei table take represent kore oi table theke mane phons table theke id diye match korbe and oi id ar opore base kore amader user ar data ta dekhabe ...user mane hocche amader Phon model ar moddhe amra user() method ar moddhe jei relation ta korechi oi method ar nam
        dd($data);
    }
}
