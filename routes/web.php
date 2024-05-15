<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CekStatusAntrian;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardAdminDokter;
use App\Http\Controllers\DashboardAdminUgd;
use App\Http\Controllers\LandingPage;
use App\Http\Controllers\RegisPasien;
use App\Http\Middleware\isRoleAdminDokter;
use App\Http\Middleware\isRoleAdminUgd;
use App\Http\Middleware\isRoleAdminUtama;
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


Route::middleware('guest')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'loginview')->name('login');
        // Route::post('/login-post', 'login')->name('login.post');
    });
});


Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::post('/logout', 'AuthController@logout')->name('logout');


Route::middleware(isRoleAdminUgd::class, 'auth')->group(function(){

    Route::controller(DashboardAdminUgd::class)->group(function(){
        Route::get('/dashboard/adminugd', 'index')->name('adminugd.index');
    });
});

Route::middleware(isRoleAdminUtama::class, 'auth')->group(function(){

    Route::controller(Dashboard::class)->group(function(){
        Route::get('/dashboard/adminutama', 'adminutamaview')->name('adminutama.index');
        Route::get('/dashboard/getadmin', 'CekStatusAntrian@index')->name('getadmin');
        // Route::get('/dashboard/adminugd', 'adminugdview')->name('adminugd.index');
    });
});

Route::middleware(isRoleAdminDokter::class, 'auth')->group(function(){
    Route::controller(DashboardAdminDokter::class)->group(function(){
        Route::get('/dashboard/admindokter', 'index')->name('admindokter.index');
        Route::get('/dashboard/admindokter/rekammediklist', 'rekammediklist')->name('rekammedik.list');
    });
});
