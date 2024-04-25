<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Airline extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "airline";//phai dien dung ten ban ma minh can tro toi torng co so du lieu
    protected $fillable = ['idAirline','name','country','email'];
}
