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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('npm'); // Kolom npm sebagai foreign key
            $table->foreign('npm')->references('npm')->on('user'); // Menyatakan npm sebagai foreign key dari users table
            $table->string('bulan');
            $table->integer('jumlah_uang_kas');
            $table->string('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
