<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if (isset($_POST['submit'])) {
            $request->validate([
                'user_nip' => ['required'],
                'password' => ['required'],
            ]);
            $credentials = $request->only('user_nip', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                $user = Auth::user();
                if ($user->user_level == 'superadmin') {
                    return redirect()->intended('dash');
                } else if ($user->user_level == 'admin') {
                    echo 'anda adalah admin';
                    exit;
                } else {
                    echo 'gagal';
                    exit;
                }
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('backend.auth.login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }
}
