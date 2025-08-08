<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Login Page
Route::get('/', [SesiController::class, 'index'])->name('login');
Route::post('/', [SesiController::class, 'login'])->name('login');

Route::get('/dashboard/superadmin', [SuperadminController::class, 'index'])->name('dashboard.superadmin');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');

