<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditEskulController extends Controller
{
    public function index()
    {
        return view('admin.eskul.edit');
    }
}
