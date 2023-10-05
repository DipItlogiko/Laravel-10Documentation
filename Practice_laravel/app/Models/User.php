<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Scopes\AncientScope;
use App\Events\UserCreated;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    /////__akhane kichu Local Scopes add kora hoyeche__////

    // public function scopeByid($query) ///////akhane ami scope ar pore jei nam ta diyechi oi ta holo amader ai scope ar nam ami akhane Byid diyechi amader ai scope ar nam jokhon amra ai scope ke kothaw call korbo tokhon ai nam aaa amra amader ai scope take call korbo
    // {
    //    return  $query->where('id', '=', 6 ); /////akhane ami id number diye queary korchi....go to routes/web.php
    // }






    //////////__akhane amader create kora akta glabal scope ke add kora hoyeche__/////

    // protected static function booted()  /////// akhane ami je global scopes ta create korechi app/Models/Scopes directory ar moddhe oi scopes take amra amader User model ar moddhe add kore diyechi name amader oi scopes ar moddhe je queary kora ache ta amader user modle ar moddhe execute hobe 
    // {
    //     static::addGlobalScope(new AncientScope); /////// akhane ami je global scopes ta create korechi app/Models/Scopes directory ar moddhe oi scopes ar class ar nam ta akhane ami bole diyechi AncientScope......go to routes/web.php
    // }




    /////__Event listener__///// (check README.md) 
    protected $dispatchesEvents = [
        'created' => UserSaved::class, ////// akhane ami bole diyechi jokhon amader User model ar moddhe mane User model ta amader database ar jei table ke represent korche oikhane jodi kono data notun kore create hoy ba User jokhon created hobe tokhon amader ai class ta ba event ta  UserSaved::class  fire hobe 
         
    ];

    /////_model ar boot function overwrite kore_/////
    Public static function boot() {
        parent::boot();

        static::created(function($user){
            dd('From boot method', $user); ////// jokhon eee amader User model a kono notun data mane User model jei database ar table ke represent kore jemon users table oi users table aa jodi kono notun data add hoy tahole created event ta fire hobe ja laravel ar akta event akhane ami static:: method ar sathe created() take add kore diyechi fole jokhon eee amader database ar ai users table ar moddhe kono notun data add hobe tokhon laravel ar created event ta fire hobe and amader ai code ta execute hobe
        });

        static::updated(function($user){
            dd('From boot method', $user); ////// jokhon eee amader User model a kono exesting data mane User model jei database ar table ke represent kore jemon users table oi users table aa jodi kono exesting data ke modify kora hoy tahole updated event ta fire hobe ja laravel ar akta event akhane ami static:: method ar sathe updated() take add kore diyechi fole jokhon eee amader database ar ai users table ar moddhe kono exesting data modify hobe tokhon laravel ar updated event ta fire hobe and amader ai code ta execute hobe
        });
    }
}
