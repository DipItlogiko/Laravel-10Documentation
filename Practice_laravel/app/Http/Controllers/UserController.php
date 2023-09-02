<?php

namespace App\Http\Controllers;

use Closure; 
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    public function show()
    {
        $url = route('profile');
        ////dd($url);

        ////we can redirect() belows 3 ways:

        //return redirect()->route('profile');
        //return to_route('profile');
        return redirect($url);
    }

    public function another()
    {
        $url = route('profile', ['id' => 1]);
        // dd($url);

        return redirect($url); 
    }

    public function anotherWay()
    {
        $url = route('profile',['id' => 2 , 'name' => 'dipghosh']);
        return redirect($url);
    }

    public function getUser(User $user) /////akhane User model theke $user
    {


        return view('userprofile', ['user' => $user]);

    //     $userId= $request->id; 
        
    //     $find = User::find($userId);
    //     return $find;
    }


    Public function CMMB(User $user)
    {
        return view('form');
    }

    
 
}