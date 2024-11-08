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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('kode_book');
            $table->string('tittle');
            $table->string('author');
            $table->string('publisher');
            $table->string('place_of_publication');
            $table->integer('publication_year');
            $table->string('kode_fakultas');
            $table->string('kode_genre');
            $table->string('kode_source');
            $table->string('bookshelf');
            $table->text('synopsis');
            $table->string('ebook');
            $table->string('cover');
            $table->string('books_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
