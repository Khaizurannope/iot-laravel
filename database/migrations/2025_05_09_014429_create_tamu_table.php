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
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->string('instansi');
            $table->string('tujuan_kunjungan');
            $table->dateTime('waktu_kunjungan');
            $table->string('kontak')->nullable();
            $table->timestamps();
            $table->enum('status', ['SUDAH PULANG', 'BELUM'])->default('BELUM');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};
