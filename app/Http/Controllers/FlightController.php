<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class FlightController extends Controller
{
    public function index(Request $request){
        $flight = DB::table('flight')
            ->select('idFlight','departureAirport','arrivalAirport','departureDate','dapartureTime','arrivalDate','arrivalTime','flightDuration','aircraft','numberOfStop','airlineName','status','ticketPrice')
            ->get();
        return view('flights.index',compact('flight'));
    }
    public function add(FlightRequest $request){
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $flight = Flight::create($params);
            if ($flight->id) {
                Session::flash('success','Add flight successfully');
                return redirect()->route('route_flight_index');
            }
        }
        return view('flights.add');
    }
    public function edit(FlightRequest $request, $id){
        $flight = DB::table('flight')->where('idFlight','=',$id)->first();
        if ($request->isMethod('POST')){
            $result = Flight::where('idFlight',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the Flight');
                return redirect()->route('route_flight_index',['idFlight'=>$id]);
            }
        }
        return view('flights.edit',compact('flight'));
    }
    public function delete($id){
        Flight::where('idFlight',$id)->delete();
        Session::flash('success','successfully deleted the flight whose id is '.$id);
        return redirect()->route('route_flight_index');
    }
}
