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


    //--One To One Relationship--//
    public function phon()
    {
        return $this->hasOne(Phon::class);        // hasOne() method mane hocche amader aikhane One To One relationship kora hoyeche
    }
   
    //--One To Many Relationship--//
    public function posts()  /// akhane amader User Model ar moddhe ami bole dilam je amader Post nam aaa je Model ta ache oi Model ar sathe akta relation korte amader User Model  mane User Model ta database ar jei table take represent kore oi table ar sathe Post Model ta database ar jei table take represent kore  oi table ar akta relation hobe and jehetu ami User Model ar moddhe hasMany diye Post::class diyechi tai amader  1 jon user chaile akhane oonek gulo post korte parbe muloto ami akhane One To Many Relationship korechi hasMany() method ar maddhome amader 1 jon user oonek gulo post korte parbe
    {
        return $this->hasMany(Post::class);
    }

     
}
