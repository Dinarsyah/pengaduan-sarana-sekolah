<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('aspirasi_id');
            $table->foreignId('siswa_id')->constrained('siswa')->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->text('deskripsi');
            $table->foreignId('status_id')->constrained('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aspirasi');
    }
};