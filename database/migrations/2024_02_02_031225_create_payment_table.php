<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('nis_siswa')->unique();
            $table->integer('nomor_wa')->unique();
            $table->string('email')->unique();
            $table->string('total_payment');
            $table->date('bulan');
            $table->string('image_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
