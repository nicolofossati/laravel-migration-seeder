<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agency', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->string('departure_time', 30);
            $table->string('arrival_time', 30);
            $table->string('train_code', 30);
            $table->unsignedTinyInteger('carriage_number');
            $table->boolean('in_time');
            $table->boolean('cancelled');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};