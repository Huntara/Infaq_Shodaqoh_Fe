<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table='payment';

    protected $fillable = [
        'nama_lengkap',
        'nis_siswa',
        'nomor_wa',
        'email',
        'total_payment',
        'bulan',
        'image_payment',
    ];
}
