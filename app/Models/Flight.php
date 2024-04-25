<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Flight extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "flight";//phai dien dung ten ban ma minh can tro toi torng co so du lieu
    protected $fillable = ['idFlight','departureAirport','arrivalAirport','departureDate','dapartureTime','arrivalDate','arrivalTime','flightDuration','aircraft','numberOfStop','airlineName','status','ticketPrice'];
}
