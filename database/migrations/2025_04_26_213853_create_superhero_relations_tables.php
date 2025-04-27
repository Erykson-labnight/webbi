<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tabla pivot para superheroes y poderes
        Schema::create('superhero_power', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhero_id')->constrained()->onDelete('cascade');
            $table->foreignId('power_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Tabla pivot para superheroes y equipos
        Schema::create('superhero_team', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhero_id')->constrained()->onDelete('cascade');
            $table->foreignId('team_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Tabla pivot para superheroes y enemigos
        Schema::create('superhero_enemy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhero_id')->constrained()->onDelete('cascade');
            $table->foreignId('enemy_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('superhero_enemy');
        Schema::dropIfExists('superhero_team');
        Schema::dropIfExists('superhero_power');
    }
};
