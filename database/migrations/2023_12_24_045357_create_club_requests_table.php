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
        Schema::create('club_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('football_club_id');
            $table->string('email');
            $table->foreignId('request_type_id');
            $table->longText('description');
            $table->timestamp('requested_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_requests');
    }
};
