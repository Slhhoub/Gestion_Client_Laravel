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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idUserCreate');
            $table->foreign('idUserCreate')->references('id')->on('users');
            $table->String('numberCar');
            $table->String('typeCar');
            $table->String('dateTaking');
            $table->String('priceDay');
            $table->String('imageCar');
            $table->text('plusInformation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
