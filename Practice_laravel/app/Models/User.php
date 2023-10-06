<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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
        'user_ocupation',
        'dob',
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

/////////// nicher ai Accessor And Mutator ta thik thak kaj korche ki na ta bojhar jonno ami larave ar akta package install koreche breez ai breez ta amader akta authentication service provider kore...jodi amra register ar moddhe kono data diye register kori tahole oi datagulo amader users table ar moddhe giye save hoy and oi users table take amader User model represent kore...and ami amader Accessor and Mutator use korechi amader User model ar moddhe....jehetu Accessor and Mutator ai 2ta freture hocche amader Eloquent Model ar fretures tai amader ai freture ta use korte hole Model ar moddhei korte hobe..

   //////__Eloquent Model Mutator__//////(check README.md)

   public function setNameAttribute($value){ ////setNameAttribute aita hocche amader akta Mutator, Name hocche amader table ar field ar nam jemon name..jehetu amra jani amader laravel application ar porteek ta Eloquent Model amader database ar ak ak ta table ke represent kore jemon amader ai User model ta users table take represent kore and akhne Name diyechi mane amader oi users table ar name field take bojhacchi..... r ai $value ta hocche amader form ar name input field ar moddhe user je value ta dicche oi value ta...
        
        $this->attributes['name'] = ucwords($value);//// akhane ucwords() method ar kaj hocche amra ai method ar moddhe ja pass korbo oi take oo UpserCase kore debe ...jemon ami akhane ai method ar moddhe $value ta diye diyechi mane user jokhon amader name input field ar moddhe kono value ba data pass korbe tokhon oi value ba data amader ai $value ar moddhe ashbe and oi value ta UperCase hoye jabe jemon Dip Ghosh ai vabe and tar pore amra oi value take amader database ar table ar oi name column ar moddhe save kore diyechi ai line ar maddhome $this->attributes['name'] akhane attributes[] array ar moddhe je name ta diyechi oi ta hocche amader users table ar name column ar nam mane amader ai value ta UperCase hoye amader users table ar name column ar moddhe save hoye jabe
   }


   public function setUserOcupationAttribute($value){ ////setUserOcupationAttribute aita hocche amader akta Mutator, UserOcupation hocche amader table ar field ar nam jemon user_ocupation..jehetu amra jani amader laravel application ar porteek ta Eloquent Model amader database ar ak ak ta table ke represent kore jemon amader ai User model ta users table take represent kore and akhne UserOcupation diyechi mane amader oi users table ar user_ocupation field take bojhacchi..... r ai $value ta hocche amader form ar ocupation input field ar moddhe user je value ta dicche oi value ta...
        
        $this->attributes['user_ocupation'] = ucwords($value);//// akhane ucwords() method ar kaj hocche amra ai method ar moddhe ja pass korbo oi take oo UpserCase kore debe ...jemon ami akhane ai method ar moddhe $value ta diye diyechi mane user jokhon amader ocupation input field ar moddhe kono value ba data pass korbe tokhon oi value ba data amader ai $value ar moddhe ashbe and oi value ta UperCase hoye jabe jemon student likhle Student hoye jabe  ai vabe and tar pore amra oi value take amader database ar table ar oi user_ocupation column ar moddhe save kore diyechi ai line ar maddhome $this->attributes['user_ocupation'] akhane attributes[] array ar moddhe je user_ocupation ta diyechi oi ta hocche amader users table ar user_ocupation column ar nam mane amader ai value ta UperCase hoye amader users table ar user_ocupation column ar moddhe save hoye jabe
   }

  
   /////__Eloquent Model Accessor__/////(check README.md)

   public function getDobAttribute($value){ ////getDobAttribute aita hocche amader akta Accessor, Dob hocche amader table ar field ar nam jemon dob tebel ar field ba column  ar nam jodi choto hater thake tahole akhane ptothom ookkhor ta boro hater likhte hobe..jehetu amra jani amader laravel application ar porteek ta Eloquent Model amader database ar ak ak ta table ke represent kore jemon amader ai User model ta users table take represent kore and akhne Dob diyechi mane amader oi users table ar dob field take bojhacchi..... r ai $value ta hocche amader users table ar dob column theke je value ta ashbe oi value take bojhano hocche...

        return date("d-M-Y",strtotime($value)); ///// amader users table ar dob column ar value ta jehetu amader $value ar moddhe ashbe tai ami oi $value tahke akhane modify kore diyechi jehetu amader users table ar dob column ar value gulo hocche date and ami aikhane oi data guloke modify kore diyechi jei date gulo amader users table ar dob column ar moddhe ache jokhon amader ai dob column ar value amra how korabo kothaw tokhon amader database ar moddhe theke oi data ba time ta aikhane eeeshe aage modify hobe tar por amader shamne show hobe..kintu amader database ar oi table ar oi column ar value aaakoi thakbe kintu jokhon amra oi column ar value show korbo kothaw tokhon oita amader aikhan theke ashe aaage modify hobe tar pore amader dekhabe....  
   }


}
