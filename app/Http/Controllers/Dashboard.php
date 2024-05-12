<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function admindokterview()
    {
        return view('dashboard.admindokter.index');
    }

    public function adminutamaview()
    {
        return view('dashboard.adminutama.index');
    }

    public function adminugdview()
    {
        return view('dashboard.adminugd.index');
    }
}
