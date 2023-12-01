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
        Schema::create('rusaks', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal');
            $table->foreignId('kode_barangruang');
            $table->string('jumlahrusak');
            $table->string('keterangan');
            $table->string('jumlahrusakdiperbaiki');
            $table->timestamps();
            // $table->foreign('kode_barangruang')->references('id')->on('barangruangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rusaks');
    }
};
