<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class TicketController extends Controller
{
    public function index(Request $request){
        $tickets = DB::table('ticket')
            ->select('idTicket','userName','airline','departureAirport','arrivalAirport','departureDate','departureTime','ticketType','ticketPrice','seatNumber')
            ->get();
        return view('admin.tickets.index',compact('tickets'));
    }
    public function add(TicketRequest $request){
        if ($request->isMethod('POST')){
            $params =  $request->except('_token');
            $ticket = Ticket::create($params);
            if ($ticket->id) {
                Session::flash('success','Add ticket successfully');
                return redirect()->route('route_ticket_index');
            }
        }
        return view('admin.tickets.add');
    }
    public function edit(TicketRequest $request, $id){
        // cach 1 DB query
        $ticket = DB::table('ticket')->where('idTicket','=',$id)->first();
        // cach 2 dung model
//        $airline = Airline::find($idAirline);
        if ($request->isMethod('POST')){
            $result = Ticket::where('idTicket',$id)->update($request->except('_token'));
            if ($result){
                Session::flash('success','successfully update the ticket');
                return redirect()->route('route_ticket_index',['idTicket'=>$id]);
            }
        }
        return view('admin.tickets.edit',compact('ticket'));
    }
    public function delete($id){
        Ticket::where('idTicket',$id)->delete();
        Session::flash('success','successfully deleted the ticket whose id is '.$id);
        return redirect()->route('route_ticket_index');
    }
}
