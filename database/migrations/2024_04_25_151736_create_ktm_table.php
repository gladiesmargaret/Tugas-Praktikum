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
        // Schema::create('ktm', function (Blueprint $table) {
        //     $table->id('id_ktm');
        //     $table->string('id_mahasiswa', 9)->unique();
        //     $table->string('nomor_identitas', 8)->unique();

        //     $table->foreign('id_mahasiswa')->references('id_mahasiswa')->on('mahasiswa');
        // });

        Schema::create('ktm', function (Blueprint $table) {
            $table->id('id_ktm');
            $table->string('nim', 9)->unique();
            $table->string('nomor_identitas', 8)->unique();

            $table->foreign('nim')->references('nim')->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ktm');
    }
};
