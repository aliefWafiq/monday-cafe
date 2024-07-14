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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 255);
            $table->string('nama', 255);
            $table->set('category', ['Sarapan', 'Makan siang', 'Cemilan', 'minuman']);
            $table->integer('harga');
            $table->text('desc');
            $table->enum('status', ['Tersedia', 'Habis']);
            $table->string('updated_at', 255);
            $table->string('created_at', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
