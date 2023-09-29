<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function Admin(User $user)
    {
       return $user->email === 'admin@gmail.com';
    }
}
