<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna saat ini sudah terotentikasi
        if (Auth::check()) {
            // Dapatkan pengguna yang saat ini terotentikasi
            $user = Auth::user();

            // Periksa role_id pengguna
            if ($user->role_id == 1) {
                // Jika role_id pengguna sesuai, lanjutkan ke route yang diminta
                return $next($request);
            }
        }

        // Jika tidak memenuhi persyaratan, redirect atau kembalikan respons yang sesuai
        return redirect('/'); // Contoh: Redirect ke halaman utama
    }
}
