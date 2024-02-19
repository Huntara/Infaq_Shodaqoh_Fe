<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table='pembayaran';

    protected $fillable = [
        'nama_bank',
        'users_id',
        'pemilik_bank',
        'nominal',
        'no_telpon',
        'image',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,  'user_id');
    }
}
