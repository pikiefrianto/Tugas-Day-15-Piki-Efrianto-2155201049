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
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id_peran');
            $table->integer('id_film')->unsigned();
            $table->integer('id_cast')->unsigned();
            $table->char('nama', 45);
            $table->timestamps();

            $table->foreign('id_film')->references('id')->on('film')->onDelete('cascade');
            $table->foreign('id_cast')->references('id')->on('cast')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
