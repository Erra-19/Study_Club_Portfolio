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
        Schema::create('lacaks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengiriman');
            $table->unsignedBigInteger('id_status');
            $table->string('location');
            $table->timestamps();

            $table->foreign('id_pengiriman')
                ->references('id')
                ->on('pengirimen')
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
        Schema::dropIfExists('lacaks');
    }
};
