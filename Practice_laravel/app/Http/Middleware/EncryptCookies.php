<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array<int, string>
     */
    protected $except = [
        'dibbo',  //////// akhane ami bole diyechi je amar dibbo name je cookie ache oi cookie te bydefault behebior jemon encript apply hobe na karon ami ai cookie take $except ar moddhe rekhechi mane aitake ooo aaboid korbe jodi amra inspect kore application ar moddhe Storage ar moddhe Cookies ar moddhe jai tahole dekhte pabo dibbo name cookie take amra modify korte parchi and porte ooo parchi...clint theke je kew aita change ba overwrite kore dite pare     
    ];
}
