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
        Schema::create('stock_opnames', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->unsignedBigInteger('kode_ruang');
            $table->unsignedBigInteger('id_barang');
            $table->string('jumlahAsal');
            $table->string('jumlahAktual');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('kode_ruang')->references('id')->on('ruangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_opnames');
    }
};
