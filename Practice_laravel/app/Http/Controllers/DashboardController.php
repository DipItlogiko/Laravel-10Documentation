<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return 'hello i am dashboard';
    }

    public function profile()
    {
        return 'hello i am Profile';
    }

    public function settings()
    {
        return 'hello i am Settings';
    }

    
}
