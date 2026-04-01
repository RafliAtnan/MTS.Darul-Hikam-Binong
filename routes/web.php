<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminHomeController;
use Illuminate\View\View;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/admin', function(){
        return view('admin.adminlogin');
        });

Route::get('/admin/home', function () {
    return view('admin.index');
});

// Kelola Guru //

Route::get('/admin/guru', function () {
    return view('admin.guru.dataguru');
});
Route::get('/admin/guru/edit', function () {
    return view('admin.guru.edit');
});
Route::get('/admin/guru/tambah', function () {
    return view('admin.guru.tambah');
});

// Kelola Eskul //
Route::get('/admin/eskul', function () {
    return view('admin.eskul.dataeskul');
});