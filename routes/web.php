<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\CekStatusAntrian;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\RegisPasien;
use Illuminate\Support\Facades\Route;



Route::controller(LandingPage::class)->group(function(){
    Route::get('/', 'index')->name('landingpage.index');
});

Route::controller(RegisPasien::class)->group(function(){
    Route::get('/registrasi', 'index')->name('regispasien.index');
    Route::get('/registrasi/baru', 'regisbaruview')->name('regispasien.baru');
    Route::get('/registrasi/lama', 'regislamaview')->name('regispasien.lama');
});

Route::controller(CekStatusAntrian::class)->group(function(){
    Route::get('/cekstatusantrian', 'index')->name('cekstatusantrian.index');
});


Route::controller(Dashboard::class)->group(function(){
    Route::get('/dashboard/admindokter', 'admindokterview')->name('admindokter.index');
    Route::get('/dashboard/adminutama', 'adminutamaview')->name('adminutama.index');
    Route::get('/dashboard/getadmin', 'CekStatusAntrian@index')->name('getadmin');
    Route::get('/dashboard/adminugd', 'adminugdview')->name('adminugd.index');
});

Route::controller(Auth::class)->group(function(){
    Route::get('/login', 'loginview');
    // Route::get('/registrasi', 'registrationview');
});
