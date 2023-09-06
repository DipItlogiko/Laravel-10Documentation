<?php


namespace App\Enums;
 

enum Permition : string 
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}