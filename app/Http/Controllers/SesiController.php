<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $infologin = [
            'username' => $request->login,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            $user = Auth::user();

            // Tambahkan log ini untuk memastikan role terbaca
            logger()->info('Login berhasil. Role: ' . $user->role);

            switch ($user->role) {
                case 'superadmin':
                    return redirect()->route('dashboard.superadmin');
                case 'admin':
                    return redirect()->route('dashboard.admin');
                case 'user':
                    return redirect()->route('dashboard.user');
                default:
                    Auth::logout();
                    return redirect('/')->withErrors(['login' => 'Role tidak dikenali']);
            }
        } else {
            return back()->withErrors(['login' => 'Login gagal. Periksa kembali data Anda.']);
        }
    }

}

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
