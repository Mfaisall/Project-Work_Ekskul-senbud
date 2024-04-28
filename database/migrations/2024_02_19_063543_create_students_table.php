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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis');
            $table->bigInteger('rombel_id');
            $table->bigInteger('rayon_id');
            $table->bigInteger('ekskul_id');
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->timestamps();

            // $table->foreign('rayon_id')->references('id')->on('rayon')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
