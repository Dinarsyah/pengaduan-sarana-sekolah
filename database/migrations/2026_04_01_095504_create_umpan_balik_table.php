<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('umpan_balik', function (Blueprint $table) {
            $table->id('umpan_balik_id');
            $table->foreignId('aspirasi_id')->constrained('aspirasi')->onDelete('cascade');
            $table->foreignId('admin_id')->constrained('admin');
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('umpan_balik');
    }
};