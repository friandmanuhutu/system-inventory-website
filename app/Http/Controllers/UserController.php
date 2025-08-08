<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.dashboard', compact('user'));
    }

    public function barang()
    {
        // View + search barang (tanpa edit/hapus)
        return view('user.barang');
    }

    public function rak()
    {
        // View tatanan rak
        return view('user.rak');
    }

    public function profile()
    {
        return view('user.profile');
    }
}
