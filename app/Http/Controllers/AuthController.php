<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginview()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba untuk login
        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $request->session()->regenerate();

            // Mendapatkan data user yang login
            $user = Auth::user();

            // Cek role_id user
            if ($user->role_id == 1) {
                return redirect()->route('adminutama.index');
            }elseif($user->role_id == 2){
                return redirect()->route('adminugd.index');
            }elseif($user->role_id == 3){
                return redirect()->route('admindokter.index');
            }
        }

        // Autentikasi gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Redirect ke halaman utama setelah logout
    }

}
