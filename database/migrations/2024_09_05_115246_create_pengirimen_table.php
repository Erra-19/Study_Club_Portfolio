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
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_resi');
            $table->unsignedBigInteger('id_staff');
            $table->unsignedBigInteger('id_kustomer');
            $table->unsignedBigInteger('id_kendaraan');
            $table->decimal('berat_barang', 10, 2);
            $table->unsignedBigInteger('id_jenis_barang');
            $table->tinyInteger('mudah_pecah')->length(1);
            $table->unsignedBigInteger('id_status');
            $table->timestamps();

            $table->foreign('id_staff')
                ->references('id')
                ->on('staffs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_kustomer')
                ->references('id')
                ->on('kustomers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_kendaraan')
                ->references('id')
                ->on('kendaraans')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_jenis_barang')
                ->references('id')
                ->on('jenis_barangs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_status')
                ->references('id')
                ->on('pengiriman_statuses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimen');
    }
};
