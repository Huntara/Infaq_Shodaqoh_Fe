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
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->string("nama_bank")->nullable();
            $table->string("pemilik_bank")->nullable();
            $table->integer("nominal");
            $table->integer("no_telpon");
            $table->string('image')->nullable();
            $table->enum('status', ['Proses', 'Selesai', 'Tolak'])->default('Proses');
            $table->date('done_time')->nullable();
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
