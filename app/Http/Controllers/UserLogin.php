<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    public function login()
    {
        return view ('Login/login');
    }

    public function register()
    {
        return view ('Login/register');
    }
}
