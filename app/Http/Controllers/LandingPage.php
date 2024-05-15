<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index()
    {
        $userrole = User::get();
        return view('landingpage.index', compact('userrole'));
    }
}
