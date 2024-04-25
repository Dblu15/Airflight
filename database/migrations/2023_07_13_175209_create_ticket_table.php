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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('idTicket');
            $table->string('userName');
            $table->string('airline');
            $table->string('departureAirport');
            $table->string('arrivalAirport');
            $table->string('departureDate');
            $table->string('departureTime');
            $table->string('ticketType');
            $table->integer('ticketPrice');
            $table->integer('seatNumber');
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
        Schema::dropIfExists('ticket');
    }
};
