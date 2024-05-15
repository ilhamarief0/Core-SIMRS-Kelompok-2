<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isRoleAdminDokter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    // Mengecek apakah pengguna telah login
    if (Auth::check()) {
        $user = Auth::user();
        // dd($user);
        // Jika pengguna memiliki role_id yang sesuai
        if ($user->role_id == 3) {
            return $next($request);
        }
        // Jika pengguna tidak memiliki izin, kembalikan respons yang sesuai
        abort(403, 'Unauthorized');
    }
    // Jika pengguna belum login, lanjutkan ke langkah berikutnya
    return $next($request);
    }
}
