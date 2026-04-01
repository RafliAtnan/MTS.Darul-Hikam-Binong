<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataEskulController extends Controller
{
    public function index()
    {
        return view('dataeskul');
    }
}
