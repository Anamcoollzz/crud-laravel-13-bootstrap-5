<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nim',
    'nama',
    'jurusan',
    'angkatan',
    'email',
])]
class Mahasiswa extends Model {}
