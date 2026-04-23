<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up(): void
    {

        Schema::create('freefire', function (Blueprint $table) {
            $table->id();
            $table->string('nick');
            $table->string('name_team')->default('sem_time');
            $table->string('name_members')->default('sem_nome');
            $table->string('player_id');
            $table->string('members_id')->default('0');
            $table->timestamps();
        });
    }

    public function down(): void
    {

        Schema::dropIfExists('freefires');
    }
};
