<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\SuratController;

// ⛔ jangan ke welcome lagi
Route::get('/', function () {
    return redirect('/dashboard');
});

// 🔐 semua halaman setelah login
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // fitur kamu
    Route::resource('kwitansi', KwitansiController::class);
    Route::resource('surat', SuratController::class);

    // profile bawaan breeze (opsional)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route login/register
require __DIR__.'/auth.php';    