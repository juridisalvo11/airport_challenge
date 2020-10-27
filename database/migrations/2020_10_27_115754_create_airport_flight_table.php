<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirportFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airport_flight', function (Blueprint $table) {
            $table->unsignedBigInteger('airport_id');
            $table->foreign('airport_id')
            ->references('id')
            ->on('airports')
            ->onDelete('cascade');
            $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')
            ->references('id')
            ->on('flights')
            ->onDelete('cascade');
            $table->primary(['airport_id', 'flight_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airport_flight');
    }
}
