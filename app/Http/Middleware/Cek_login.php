<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('login')->withErrors('errorlogin', 'Mohon untuk login terlebih dahulu');
        }
        $user = Auth::user();
        if ($user->user_level == $role) {
            return $next($request);
        }
        return redirect('login')->withErrors('errorlogin', 'Kamu tidak memiliki akses!');
    }
}
