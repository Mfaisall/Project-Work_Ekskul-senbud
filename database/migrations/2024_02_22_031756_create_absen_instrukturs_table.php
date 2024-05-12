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
        Schema::create('absen_instrukturs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('instruktur_id');
            $table->dateTime('tanggalKehadiran');
            $table->enum('status_kehadiran', ['hadir', 'alpha', 'sakit', 'izin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absen_instrukturs');
    }
};
