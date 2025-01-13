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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id'); // Jedinstveni ID karte
            $table->unsignedBigInteger('event_id'); // Strani ključ za tabelu events
            $table->unsignedBigInteger('user_id'); // Strani ključ za tabelu users
            $table->string('status'); // Status karte ("active" ili "canceled")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
