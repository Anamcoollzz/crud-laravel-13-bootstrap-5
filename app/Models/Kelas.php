<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Table(name: 'kelas')]
#[Fillable([
    'kode_kelas',
    'nama_kelas',
    'tingkat',
    'kapasitas',
])]
class Kelas extends Model {}
