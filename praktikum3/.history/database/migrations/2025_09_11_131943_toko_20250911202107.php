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
        Schema::create('toko', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_toko');
            $table->string('cabang');
            $table->string('alamat');
            $table->string('no_telp', 20)->nullable();
            $table->string('pemilik')->nullable();
            $table->string('penerbit')->nullable(); // kalau toko buku, bisa diisi nama penerbit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};