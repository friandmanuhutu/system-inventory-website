<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.dashboard', compact('user'));
    }

    public function barang()
    {
        // CRUD Barang
        return view('admin.barang');
    }

    public function rak()
    {
        // View tatanan rak
        return view('admin.rak');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
