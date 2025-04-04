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
        Schema::create('buku_tamus', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama', 50);
            $table->string('asal', 25);
            $table->string('pekerjaan', 25);
            $table->unsignedSmallInteger('usia'); // Menggunakan tipe data unsignedSmallInteger
            $table->text('kesan'); // Mengubah tipe data ke text
            $table->text('pesan'); // Mengubah tipe data ke text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_tamus');
    }
};
