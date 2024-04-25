<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindFlight extends Model
{
    use HasFactory;
    protected $table = "booking";//phai dien dung ten bang ma minh can tro toi torng co so du lieu
    protected $fillable = ['idBooking','fullName','phoneNumber','email','bookingDate','departureAirport','arrivalAirport','departureDate','departureTime','ticketPrice','paymentStatus','bookingStatus'];
}
