@extends('admin.layouts.layout')
@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('route_ticket_edit',['id'=>$ticket->idTicket]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">User name</label>
            <input type="text" class="form-control" name="userName" value="{{$ticket->userName}}">
            <p class="text-danger">{{ $errors->first('userName') }}</p>
        </div>
        <div class="form-group">
            <label for="">Airline</label>
            <input type="text" class="form-control" name="airline" value="{{$ticket->airline}}">
            <p class="text-danger">{{ $errors->first('airline') }}</p>
        </div>

        <div class="form-group">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control " name="departureAirport" value="{{$ticket->departureAirport}}">
            <p class="text-danger">{{ $errors->first('departureAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control " name="arrivalAirport" value="{{$ticket->arrivalAirport}}">
            <p class="text-danger">{{ $errors->first('arrivalAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure date</label>
            <input type="text" class="form-control datepicker " name="departureDate" value="{{$ticket->departureDate}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker " name="departureTime" value="{{$ticket->departureTime}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Ticket type</label>
            <select class="form-control" name="ticketType" id="ticketType">
                <option value="{{$ticket->ticketType}}">{{$ticket->ticketType}}</option>
                @if($ticket->ticketType != "Hạng nhất")
                    <option value="Hạng nhất">Hạng nhất</option>
                @endif
                @if($ticket->ticketType != "Hạng thương gia")
                    <option value="Hạng thương gia">Hạng thương gia</option>
                @endif
                @if($ticket->ticketType != "Hạng phổ thông đặc biệt")
                    <option value="Hạng phổ thông đặc biệt">Hạng phổ thông đặc biệt</option>
                @endif
                @if($ticket->ticketType != "Hạng phổ thông")
                    <option value="Hạng phổ thông">Hạng phổ thông</option>
                @endif
            </select>
            <p class="text-danger">{{ $errors->first('ticketType') }}</p>
        </div>
        <div class="form-group">
            <label for="">Ticket price</label>
            <input type="text" class="form-control" name="ticketPrice" value="{{$ticket->ticketPrice}}">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <div class="form-group">
            <label for="">Seat number</label>
            <input type="text" class="form-control" name="seatNumber" value="{{$ticket->seatNumber}}">
            <p class="text-danger">{{ $errors->first('seatNumber') }}</p>
        </div>

        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
@endsection
