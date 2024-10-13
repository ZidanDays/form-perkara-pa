<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\DashboardController;

// Route untuk menampilkan form login (GET)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Route untuk proses login (POST)
Route::post('/login', [AuthController::class, 'login']);

// Route untuk logout (POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route halaman forms
Route::get('/forms', [FormsController::class, 'ShowPageForms'])->middleware('auth')->name('form.view');

// Route create/add forms
Route::post('/forms', [FormsController::class, 'store'])->name('form.store');

// Route dashboard, mengambil semua data perkara
// Route::get('/dashboard', function () {
//     // $perkaras = \App\Models\Perkara::all(); // Menggunakan namespace penuh untuk Model
//     $perkaras = Perkara::all();
//     return view('dashboard.index', compact('perkaras')); // Mengirim data ke view nm/index.blade.php
// })->middleware('auth')->name('index');

Route::get('/dashboard', [DashboardController::class, 'create'])->name('dashboard');