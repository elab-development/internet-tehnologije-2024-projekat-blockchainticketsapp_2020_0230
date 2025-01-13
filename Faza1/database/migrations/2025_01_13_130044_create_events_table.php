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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->date('datum'); // Za unos datuma
            $table->time('vreme'); // Za unos vremena
            $table->decimal('cena', 8, 2); // Cena sa 2 decimale
            $table->text('opis'); // Opis događaja
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
