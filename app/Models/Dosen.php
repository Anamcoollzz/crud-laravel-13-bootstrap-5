<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'nidn',
    'nama',
    'email',
    'no_telp',
    'jabatan',
])]
class Dosen extends Model {}
