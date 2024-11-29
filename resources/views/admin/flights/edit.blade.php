@extends('admin.layouts.layout')
@section('content')
    <h1>Add new Airline</h1>
    <form action="{{ route('route_flight_edit',['id'=>$flight->idFlight]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control" name="departureAirport" value="{{$flight->departureAirport}}">
        </div>
        <div class="form-group">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control" name="arrivalAirport" value="{{$flight->arrivalAirport}}">
        </div>
        <div class="form-group">
            <label for="">Departure Date</label>
            <input type="date" class="form-control datepicker" name="departureDate" value="{{$flight->departureDate}}">
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker" name="dapartureTime" value="{{$flight->dapartureTime}}">
        </div>
        <div class="form-group">
            <label for="">Arrival Date</label>
            <input type="text" class="form-control datepicker" name="arrivalDate" value="{{$flight->arrivalDate}}">
        </div>
        <div class="form-group">
            <label for="">Arrival Time</label>
            <input type="text" class="form-control timepicker " name="arrivalTime" value="{{$flight->arrivalTime}}">
        </div>
        <div class="form-group">
            <label for="">Flight Duration</label>
            <input type="text" class="form-control" name="flightDuration" value="{{$flight->flightDuration}}">
        </div>
        <div class="form-group">
            <label for="">Aircraft</label>
            <input type="text" class="form-control" name="aircraft" value="{{$flight->aircraft}}">
        </div>
        <div class="form-group">
            <label for="">Number of stop</label>
            <input type="text" class="form-control" name="numberOfStop" value="{{$flight->numberOfStop}}">
        </div>
        <div class="form-group">
            <label for="">Airline Name</label>
            <input type="text" class="form-control" name="airlineName" value="{{$flight->airlineName}}">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status" value="{{$flight->status}}">
        </div>
        <div class="form-group">
            <label for="">Ticket Price</label>
            <input type="text" class="form-control" name="ticketPrice" value="{{$flight->ticketPrice}}">
        </div>
        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
@endsection
