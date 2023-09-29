<?php

namespace App\Gates;

class AdminGate{ ////// aikhane  ami Gates ar jonno akta class create korechi and ai class ta ke amader App\Providers\AuthServiceProvider ar boot method ar moddhe giye define kore dite hobe . 
    public function check_admin($user){
        if($user->email === 'admin@gmail.com'){ ////////////// akhane amader authenticated user ar email ta check kora hobe jodi amader authenticated user ar email admin@gmail.com aita hoy tahole ooo true return korbe otherwise it will return false
            return true; /////akhan theke true ba false response ta jabe amader app/Proviers/AuthServiceProvider ar boot method ar moddhe jekhane amader ai class and check_admin method ta jekhane call kora hoyeche shekhane
        }else {
            return false;
        } 
    }
}