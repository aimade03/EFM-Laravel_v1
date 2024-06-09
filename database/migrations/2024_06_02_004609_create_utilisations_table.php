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
        Schema::create('utilisations', function (Blueprint $table) {    
            $table->id();
            $table->foreignId('voiture_id')->constrained('voitures');
            $table->foreignId('salarie_id')->constrained('salaries');
            $table->date('dateDebutUtilisation');
            $table->date('dateFinUtilisation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisations');
    }
};
