<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     * Memastikan user sudah login DAN memiliki role admin yang aktif.
     * Jika belum login / bukan admin, diarahkan ke halaman login admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
        }

        if (! Auth::user()->isAdmin()) {
            Auth::logout();

            return redirect()->route('admin.login')->with('error', 'Akun Anda tidak memiliki akses admin.');
        }

        return $next($request);
    }
}
