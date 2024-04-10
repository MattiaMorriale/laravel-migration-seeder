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
            $table->timestamps();
            $table->string('company', 200);
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->date('departure_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 15);
            $table->tinyInteger('n_carriages');
            $table->boolean('in_time');
            $table->boolean('deleted');
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
