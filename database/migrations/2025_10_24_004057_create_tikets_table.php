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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tiket');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->integer('jumlah_tiket');
            $table->date('tanggal_kunjungan');
            $table->enum('metode_pembayaran',['BCA','BRI','BNI','Mandiri','Dana','OVO']);
            $table->decimal('total_harga', 10, 2)->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->enum('status',['pending','selesai'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
