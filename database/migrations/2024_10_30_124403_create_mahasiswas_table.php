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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('nim')->unique();
            $table->integer('kode_fakultas')->nullable();
            $table->integer('kode_major')->nullable();
            $table->integer('kode_kelas')->nullable();
            $table->string('address');
            $table->string('place_of_birth');
            $table->string('date_birth');
            $table->string('email')->unique();
            $table->enum('gender', ['Laki-laki', 'Perempuan']);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};