<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditGuruController extends Controller
{
    public function index()
    {
        return view('admin.guru.edit');
    }
}
