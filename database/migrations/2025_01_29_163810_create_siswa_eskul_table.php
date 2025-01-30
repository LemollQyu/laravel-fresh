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
        Schema::create('siswa_eskul', function (Blueprint $table) {
            // table inilah yang menjadi penghubung antara table siswa dan eskul namanya pivot_table
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('eskul_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_eskul');
    }
};
