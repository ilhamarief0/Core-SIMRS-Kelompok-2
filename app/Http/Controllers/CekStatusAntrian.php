<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekStatusAntrian extends Controller
{
    public function index()
    {
        return view('cekantrian.index');

    }
}
