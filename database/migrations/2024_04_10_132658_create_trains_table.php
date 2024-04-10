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
            $table->string('Azienda', 200);
            $table->string('Stazione_part', 200);
            $table->string('Stazione_arr', 200);
            $table->date('data_part');
            $table->time('Ora_part');
            $table->time('Ora_arr');
            $table->string('train_code', 15);
            $table->tinyInteger('n_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
