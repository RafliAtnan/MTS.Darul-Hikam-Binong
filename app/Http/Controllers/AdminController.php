<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminlogin');
    }

    public function home()
    {    
        $totalGuru = \App\Models\Guru::count();
        $totalEkstrakurikuler = \App\Models\Eskul::count();

        return view('admin.index', compact('totalGuru', 'totalEkstrakurikuler'));
    }
}
