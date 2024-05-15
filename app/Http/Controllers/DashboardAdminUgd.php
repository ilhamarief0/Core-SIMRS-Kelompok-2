<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminUgd extends Controller
{
    public function index()
    {
        return view('dashboard.adminugd.index');
    }
}
