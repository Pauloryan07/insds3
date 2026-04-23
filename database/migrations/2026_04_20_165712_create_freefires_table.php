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
        // Alterado para 'freefires'
        Schema::create('freefires', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('player_id'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Garanta que aqui também seja 'freefires'
        Schema::dropIfExists('freefires');
    }
};
