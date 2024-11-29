<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FindFlightController extends Controller
{
    public function add(Request $request){
        if ($request->method() == 'POST'){
            $params =  $request->except('_token');
            $booking = Booking::create($params);
            if ($booking->id) {
                return redirect()->route('editFindFlight');
            }
        }
        return view('admin.findFlight.add');
    }
    public function edit(BookingRequest $request, $id){
        $booking = DB::table('booking')->where('idBooking','=',$id)->first();
        if ($request->isMethod('POST')){
            $result = Booking::where('idBooking',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the Booking');
                return redirect()->route('route_home',['idBooking'=>$id]);
            }
        }
        return view('admin.findFlight.edit',compact('booking'));
    }
}
