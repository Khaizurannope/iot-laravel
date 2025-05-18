<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeltes extends Model
{
    use HasFactory;
    protected $table = 'tamus';
    protected $fillable = [
        'nama_tamu',
        'instansi',
        'tujuan_kunjungan',
        'waktu_kunjungan',
        'kontak',
        'status'
    ];
}
