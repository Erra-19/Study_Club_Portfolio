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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_kendaraan');
            $table->enum('jenis_kendaraan', ['motor', 'mobil']);
            $table->string('nomor_plat_polisi');
            $table->enum('status',['istirahat', 'siap_mengantar', 'mengantar'])->default('siap_mengantar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
