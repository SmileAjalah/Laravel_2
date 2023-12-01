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
        Schema::create('pinjamans', function (Blueprint $table) {
            $table->id();
            $table->string('tanggalPinjam');
            $table->unsignedBigInteger('barang_id');
            $table->string('jumlah');
            $table->unsignedBigInteger('user_id');
            $table->string('keterangan');
            $table->string('tanggalKembali');
            $table->timestamps();

            $table->foreign('barang_id')->references('id')->on('barangs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamans');
    }
};
