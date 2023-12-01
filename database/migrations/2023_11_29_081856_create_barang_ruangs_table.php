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
        Schema::create('barang_ruangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->string('jumlah');
            $table->string('baik');
            $table->string('rusakdiperbaiki');
            $table->string('rusaktidakdiperbaiki');
            $table->unsignedBigInteger('kode_ruang');
            $table->foreignId('id_pinjam');
            $table->timestamps();

            $table->foreign('id_barang')->references('id')->on('barangs');
            $table->foreign('kode_ruang')->references('id')->on('ruangs');
            // $table->foreign('id_pinjam')->references('id')->on('pinjamans');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_ruangs');
    }
};
