<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirlineRequest;
use Illuminate\Http\Request;
use App\Models\Airline;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AirlineController extends Controller
{
    public function index(Request $request){
        $airlines = DB::table('airline')
            ->select('idAirline','name','country','email')
            ->get();
        return view('airline.index',compact('airlines'));
    }
    public function add(AirlineRequest $request){
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $airline = Airline::create($params);
            if ($airline->id) {
                Session::flash('success','Add airline successfully');
                return redirect()->route('route_airline_index');
            }
        }
        return view('airline.add');
    }
    public function edit(AirlineRequest $request, $id){
        // cach 1 DB query
        $airline = DB::table('airline')->where('idAirline','=',$id)->first();
        // cach 2 dung model
//        $airline = Airline::find($idAirline);
        if ($request->isMethod('POST')){
            $result = Airline::where('idAirline',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the airline');
                return redirect()->route('route_airline_index',['id'=>$id]);
            }
        }
        return view('airline.edit',compact('airline'));
    }
    public function delete($id){
        Airline::where('idAirline',$id)->delete();
        Session::flash('success','successfully deleted the airline whose id is '.$id);
        return redirect()->route('route_airline_index');
    }
}
