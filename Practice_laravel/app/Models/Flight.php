<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;


    protected $fillable = ['name','age']; ///////  amra amader route theke create() methoda ar maddhome ai model ar table aa jei data gulo set korar jonno oi khane likhechi sob gulo aikhane ashbe and amader ai fillable array ar moddhe amader jei column ar nam gulo lekha thakbe shudhu matro oi column ar value gulo amader oi table a giye save hobe...  
}
