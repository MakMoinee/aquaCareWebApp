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
        Schema::create('detections', function (Blueprint $table) {
            $table->id('detectionID')->autoIncrement();
            $table->integer('userID')->nullable(false);
            $table->string('fishName')->nullable(false);
            $table->string('remarks')->nullable(false);
            $table->string('results')->nullable(true);
            $table->string('imagePath')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detections');
    }
};
