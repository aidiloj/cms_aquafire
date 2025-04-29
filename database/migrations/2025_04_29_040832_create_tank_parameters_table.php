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
        Schema::create('tank_parameters', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('ammonia');
            $table->decimal('nitrite');
            $table->decimal('nitrate');
            $table->decimal('ph');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tank_parameters');
    }
};
