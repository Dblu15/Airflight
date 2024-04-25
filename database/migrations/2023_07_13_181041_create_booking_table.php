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
        Schema::create('booking', function (Blueprint $table) {
            $table->id('idBooking');
            $table->string('fullName')->nullable();
            $table->integer('phoneNumber')->nullable();
            $table->string('email')->nullable();
            $table->string('bookingDate')->nullable();
            $table->string('departureAirport');
            $table->string('arrivalAirport');
            $table->string('departureDate');
            $table->string('departureTime');
            $table->Integer('ticketPrice')->nullable();
            $table->string('paymentStatus')->nullable();
            $table->string('bookingStatus')->nullable();
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
        Schema::dropIfExists('booking');
    }
};
