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
        Schema::create('e_p_l_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('football_club_id');
            $table->foreignId('football_league_id');
            $table->integer('played');
            $table->integer('win');
            $table->integer('draw');
            $table->integer('lose');
            $table->integer('point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e_p_l_tables');
    }
};
