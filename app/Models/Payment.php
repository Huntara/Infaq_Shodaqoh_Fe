<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table='payment';

    protected $fillable = [
        'nama_bank',
        'users_id',
        'pemilik_bank',
        'nominal',
        'bukti_pembayaran',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,  'user_id', 'nominal');
    }
}
