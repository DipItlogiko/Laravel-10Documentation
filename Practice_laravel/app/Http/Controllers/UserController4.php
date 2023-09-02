<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController4 extends Controller
{
     /**
     * Create a new controller instance.
     */
    public function __construct(
        protected UserRepository $users,
    ) {
        $this->users = $users;
    }

    public function index()
    {
        // Retrieve user data using the UserRepository
        $users = $this->users->getAllUsers();

        // Return a view  
        return view('users.index', ['users' => $users]);
    }

    public function update(Request $request,string $id)
    {
        return view('users.update',['id' => $id]);
    }
}


 