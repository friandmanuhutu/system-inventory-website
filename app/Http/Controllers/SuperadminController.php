<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SuperadminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('superadmin.dashboard', compact('user'));
    }

    public function barang()
    {
        // CRUD Barang
        return view('superadmin.barang');
    }

    public function rak()
    {
        // View tatanan rak
        return view('superadmin.rak');
    }

    public function kelolaAkun()
    {
        // Register akun, reset password, nonaktifkan akun
        return view('superadmin.kelola-akun');
    }

    public function logActivity()
    {
        // Tampilkan log aktivitas user
        return view('superadmin.log-activity');
    }

    public function profile()
    {
        return view('superadmin.profile');
    }
}
