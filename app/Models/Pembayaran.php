<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table='pembayaran';

    protected $fillable = [
        'nama_bank',
        'users_id',
        'pemilik_bank',
        'nominal',
        'bukti_pembayaran',
        'status',
        'done_time',
    ];

    public function users(): HasOne{
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
