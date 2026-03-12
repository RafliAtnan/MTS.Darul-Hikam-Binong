<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profil_sekolah extends Model
{
    protected $fillable = [
    'tentang_kami',
    'visi',
    'misi',
    'alamat',
    'no_hp',
    'email'
];
}
