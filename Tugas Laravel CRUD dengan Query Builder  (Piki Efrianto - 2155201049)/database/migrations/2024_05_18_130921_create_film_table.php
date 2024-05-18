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
            $table->bigIncrements('id_film');
            $table->char('judul', 45);
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->char('poster', 45);
            $table->integer('id_genre')->unsigned();
            $table->timestamps();

            $table->foreign('id_genre')->references('id')->on('genre')->onDelete('cascade');
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
