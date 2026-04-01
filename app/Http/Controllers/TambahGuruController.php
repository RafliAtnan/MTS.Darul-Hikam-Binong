<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahGuruController extends Controller
{
    public function index()
    {
        return view('admin.guru.tambah');
    }
}
