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
        Schema::create('recipe_steps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('recipe_id')->references('id')->on('recipes');
            $table->text('description');
            $table->bigInteger('order_step');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipe_steps');
    }
};
