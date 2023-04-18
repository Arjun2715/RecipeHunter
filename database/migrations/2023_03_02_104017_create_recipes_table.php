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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('author')->nullable();
            $table->string('title');

            $table->bigInteger('category_id')->references('id')->on('categories')->nullable();
            $table->bigInteger('cuisine_id')->references('id')->on('cuisines')->nullable();
            $table->bigInteger('diet_id')->references('id')->on('diets')->nullable();


            
            $table->string('description')->nullable();
            $table->string('nutrition_facts')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
