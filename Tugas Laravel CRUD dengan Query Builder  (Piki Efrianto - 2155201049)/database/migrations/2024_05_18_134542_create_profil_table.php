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
        Schema::create('profil', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned(); 
            $table->integer('id_film')->unsigned();
            $table->integer('umur')->unsigned();
            $table->text('bio', 100);
            $table->text('alamat', 200);
            $table->timestamps();
          
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_film')->references('id')->on('films')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};
