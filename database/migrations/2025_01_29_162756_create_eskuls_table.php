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
        Schema::create('eskuls', function (Blueprint $table) {
            // untuk relasi many to many, table eskuls ini itu many to many dengan  table siswa caranya : membuat migration penghubung antara 2 table itu
            $table->id();
            $table->string('name');
            $table->string('kegiatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eskuls');
    }
};
