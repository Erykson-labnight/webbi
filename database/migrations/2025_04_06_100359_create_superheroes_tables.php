<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('universes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('hero_name')->unique();
            $table->string('real_name')->nullable();
            $table->foreignId('gender_id')->constrained()->onDelete('cascade');
            $table->foreignId('universe_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('superheroes');
        Schema::dropIfExists('universes');
        Schema::dropIfExists('genders');
    }
};
