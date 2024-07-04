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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_produk');
            $table->integer('jumlah');
            $table->integer('harga_produk');
            $table->integer('total');
            $table->enum('metode_bayar', ['dana', 'BNI', 'BRI', 'Gopay']);
            $table->timestamp('tgl_transaksi');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_produk')->references('id')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
