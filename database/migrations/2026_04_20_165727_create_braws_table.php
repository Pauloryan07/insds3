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
    Schema::create('braws', function (Blueprint $table) {
        $table->id(); // ID do Banco (não mexa)
        $table->string('nick');
        $table->string('player_id'); // Mudei de 'id' para 'player_id'
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('braws');
    }
};
