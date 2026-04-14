<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataEskulController;
use App\Http\Controllers\DataGuruController;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});


// ====================
// 🔓 PUBLIC (BELUM LOGIN)
// ====================

// Halaman login
Route::get('/admin', function () {
    return view('admin.adminlogin');
})->name('login');

// Proses login
Route::post('/admin', [AuthController::class, 'login']);


// ====================
// 🔐 PROTECTED (SUDAH LOGIN)
// ====================

Route::middleware('auth')->group(function () {

    Route::get('/admin/home', function () {
        return view('admin.index');
    });
    Route::get('/admin/home', [AdminController::class, 'home']);

    Route::post('/logout', [AuthController::class, 'logout']);

    // Kelola Guru
    Route::get('/admin/guru', [DataGuruController::class, 'index']);

    Route::get('/admin/guru/edit/{id}', [DataGuruController::class, 'edit']);
    Route::put('/admin/guru/edit/{id}', [DataGuruController::class, 'update']);
    Route::delete('/admin/guru/delete/{id}', [DataGuruController::class, 'destroy']);

    Route::get('/admin/guru/tambah', [DataGuruController::class, 'create']);
    Route::post('/admin/guru/tambah', [DataGuruController::class, 'store']);

    // Kelola Eskul
    Route::get('/admin/eskul', [DataEskulController::class, 'index']);

    Route::get('/admin/eskul/edit/{id}', [DataEskulController::class, 'edit']);
    Route::put('/admin/eskul/edit/{id}', [DataEskulController::class, 'update']);
    Route::delete('/admin/eskul/delete/{id}', [DataEskulController::class, 'destroy']);

    Route::get('/admin/eskul/tambah', [DataEskulController::class, 'create']);
    Route::post('/admin/eskul/tambah', [DataEskulController::class, 'store']);
});
