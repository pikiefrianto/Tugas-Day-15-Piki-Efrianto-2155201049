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
        Schema::create('film', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('judul','50');
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster','50');
            $table->unsignedBigInteger('genre_id'); // Kolom foreign key

            // Menambahkan foreign key constraint
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
