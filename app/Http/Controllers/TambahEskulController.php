<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahEskulController extends Controller
{
    public function index()
    {
        return view('admin.eskul.tambah');
    }
}
