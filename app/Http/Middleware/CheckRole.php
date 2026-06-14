<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // 1. Cek apakah user sudah login atau belum
        if (!Auth::check()) {
            return redirect('/login');
        }

        // 2. Cek apakah role user sesuai dengan yang diminta di web.php (admin atau mahasiswa)
        if (Auth::user()->role !== $role) {
            // Jika tidak sesuai, lempar ke halaman yang sesuai
            if (Auth::user()->role === 'admin') {
                return redirect('/admin/dashboard');
            }
            
            return redirect('/dashboard');
        }

        return $next($request);
    }
}