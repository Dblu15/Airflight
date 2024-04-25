<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "ticket";//phai dien dung ten ban ma minh can tro toi torng co so du lieu
    protected $fillable = ['idTicket','userName','airline','idFlight','departureAirport','arrivalAirport','departureDate','departureTime','ticketType','ticketPrice','seatNumber','idBooking'];
}
