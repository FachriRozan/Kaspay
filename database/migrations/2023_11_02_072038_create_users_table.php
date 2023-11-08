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
        Schema::create('user', function (Blueprint $table) {
            $table->string('npm')->primary(); // Menggunakan kolom 'npm' sebagai primary key
            $table->string('nama');
            $table->string('username')->unique(); // Menjadikan kolom 'username' sebagai unique
            $table->string('password');
            $table->boolean('role')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
