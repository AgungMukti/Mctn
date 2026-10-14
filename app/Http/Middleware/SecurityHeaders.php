<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $cdn = 'https://cdn.jsdelivr.net https://cdnjs.cloudflare.com';

        // Vite dev server: HANYA diizinkan saat APP_ENV=local
        $isLocal = app()->environment('local');
        $vite    = $isLocal ? ' http://[::1]:5173 http://localhost:5173 http://127.0.0.1:5173' : '';
        $viteWs  = $isLocal ? ' ws://[::1]:5173 ws://localhost:5173 ws://127.0.0.1:5173' : '';

        $csp = implode('; ', [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' {$cdn}{$vite}",
            "style-src 'self' 'unsafe-inline' {$cdn} https://fonts.googleapis.com{$vite}",
            "img-src 'self' data: https:",
            "font-src 'self' data: {$cdn} https://fonts.gstatic.com",
            "connect-src 'self' {$cdn}{$vite}{$viteWs}",
            "worker-src 'self' blob: https://cdnjs.cloudflare.com",
            "object-src 'none'",
            "base-uri 'self'",
            "form-action 'self'",
            "frame-ancestors 'self'",
        ]);

        $response->headers->set('Content-Security-Policy', $csp);
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        $response->headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
        $response->headers->remove('X-Powered-By');

        return $response;
    }
}