<?php

namespace App\Http\Controllers;

use App\Models\account_type_registration;
use Illuminate\Http\Request;

class RegisPasien extends Controller
{
    public function index()
    {
        $accounttype = account_type_registration::get();
        // dd($accounttype);
        return view('registrasi.regispasien', compact('accounttype'));
    }

    public function regisbaruview()
    {
        return view('registrasi.regispasienbaru');
    }

    public function regislamaview()
    {
        return view('registrasi.regispasienlama');
    }
}
