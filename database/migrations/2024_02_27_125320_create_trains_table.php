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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',64);
            $table->string('departure_station',96);
            $table->string('arrival_station',96);
            $table->dateTime('departure_time', $precision = 0)->nullable();
            $table->dateTime('arrival_time', $precision = 0)->nullable();
            $table->smallInteger('train_code')->unique()->unsigned();
            $table->tinyInteger('number_carriages')->nullable()->unsigned();
            $table->boolean('timetable')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
