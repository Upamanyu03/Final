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
        Schema::create('vehicledetails', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last');
            $table->string('email');
            $table->date('date');
            $table->string('Vno');
            $table->string('Vmake');
            $table->string('tel');
            $table->string('kms');
            $table->string('E');
            $table->string('item');
            $table->string('regular');
            $table->string('front')->nullable();
            $table->string('right')->nullable();
            $table->string('left')->nullable();
            $table->string('rear')->nullable();
            $table->string('dashbord')->nullable();
            $table->string('dickey')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicledetails');
    }
};
