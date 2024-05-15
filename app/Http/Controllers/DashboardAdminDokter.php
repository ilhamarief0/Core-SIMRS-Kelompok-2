<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminDokter extends Controller
{
    public function index()
    {
        return view('dashboard.admindokter.index');
    }

    public function rekammediklist()
    {
        return view('dashboard.admindokter.rekammediklist');
    }
}
