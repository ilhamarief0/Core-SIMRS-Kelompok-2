<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function loginview()
    {
        return view('auth.login');
    }

    // public function registrationview()
    // {
    // return view('auth.login');
    // }
}
