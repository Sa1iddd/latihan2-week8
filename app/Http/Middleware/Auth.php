<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, \Closure $next)
{
    $user = $request->session()->get('user');
    
    // Memeriksa apakah user sudah login
    if (!isset($user['is_login']) || !$user['is_login']) {
        // Jika belum login, redirect ke halaman login
        return redirect('/login')->with('error', 'Anda harus login terlebih dahulu');
    }

    return $next($request);
}

}
