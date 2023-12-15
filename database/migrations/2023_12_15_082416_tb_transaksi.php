<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->date('tgl_transaksi')->nullable();
            $table->unsignedBigInteger('id_pelanggan')->nullable(); // Menggunakan unsignedBigInteger
            $table->unsignedBigInteger('id_mobil')->nullable();  // Menggunakan unsignedBigInteger
            $table->integer('lamasewa')->nullable();
            $table->bigInteger('total_bayar')->nullable();
            $table->timestamps();
           
            // Mengatur foreign key untuk id_barang
            $table->foreign('id_pelanggan')
            ->references('id')
            ->on('tb_pelanggan')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            // Mengatur foreign key untuk id_jenis
            $table->foreign('id_mobil')
            ->references('id')
            ->on('cars')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }

};
