<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BookingController extends Controller
{
    public function index(Request $request){
        $booking = DB::table('booking')
            ->select('idBooking','fullName','phoneNumber','email','bookingDate','departureAirport','arrivalAirport','departureDate','departureTime','ticketPrice','paymentStatus','bookingStatus')
            ->get();
        return view('bookings.index',compact('booking'));
    }
    public function add(BookingRequest $request){
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $booking = Booking::create($params);
            if ($booking->id) {
                Session::flash('success','Add booking successfully');
                return redirect()->route('route_booking_index');
            }
        }
        return view('bookings.add');
    }
    public function edit(BookingRequest $request, $id){
        $booking = DB::table('booking')->where('idBooking','=',$id)->first();
        if ($request->isMethod('POST')){
            $result = Booking::where('idBooking',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the Booking');
                return redirect()->route('route_booking_index',['idBooking'=>$id]);
            }
        }
        return view('bookings.edit',compact('booking'));
    }
    public function delete($id){
        Booking::where('idBooking',$id)->delete();
        Session::flash('success','successfully deleted the booking whose id is '.$id);
        return redirect()->route('route_booking_index');
    }

}
