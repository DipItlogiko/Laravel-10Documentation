<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phon extends Model
{
    use HasFactory;

    //--Inverse Of The One To One Relationship--//
    public function user()
    {
        return $this->belongsTo(User::class);     // belongsTo() method mane hocche Inverse Of The One To One Relationship....mane amra users table ar sathe phons table ar jei One To One Relationship korechi User model ar moddhe akhon akhane ami phons table  ar sathe users table ar relationship korechi mane ulto relationship korechi Inverse Of The One To One Relationship ar belongsTo() method ar maddhome ...prothom aa amra User Model ar moddhe users table and phons table take One To One Relationship korechi and amader aikhane phons table ar sathe users table take relation kore diyechi jar fole amra users table ba User Model theke phons table ba Phon Model ar data ta fatch korte parbo aaabaer phons table ba Phon Model theke User Model ba users table ar data fatch korte parbo...
    }
}
