<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight', function (Blueprint $table) {
            $table->id('idFlight');
            $table->string('departureAirport');
            $table->string('arrivalAirport');
            $table->date('departureDate');
            $table->string('dapartureTime');
            $table->date('arrivalDate');
            $table->string('arrivalTime');
            $table->integer('flightDuration');
            $table->string('aircraft');
            $table->integer('numberOfStop');
            $table->string('airlineName');
            $table->String('status');
            $table->integer('ticketPrice');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight');
    }
};
