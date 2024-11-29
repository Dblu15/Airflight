@extends('templates.layout')
@section('content')
    <h1>Add new Flight</h1>
    <form action="{{ route('route_flight_add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control" name="departureAirport">
            <p class="text-danger">{{ $errors->first('departureAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control" name="arrivalAirport">
            <p class="text-danger">{{ $errors->first('arrivalAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Date</label>
            <input type="date" class="form-control datepicker" name="departureDate">
            <p class="text-danger">{{ $errors->first('departureDate') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker" name="dapartureTime">
            <p class="text-danger">{{ $errors->first('dapartureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Date</label>
            <input type="text" class="form-control datepicker" name="arrivalDate">
            <p class="text-danger">{{ $errors->first('arrivalDate') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Time</label>
            <input type="text" class="form-control timepicker " name="arrivalTime">
            <p class="text-danger">{{ $errors->first('arrivalTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Flight Duration</label>
            <input type="text" class="form-control" name="flightDuration">
            <p class="text-danger">{{ $errors->first('flightDuration') }}</p>
        </div>
        <div class="form-group">
            <label for="">Aircraft</label>
            <input type="text" class="form-control" name="aircraft">
            <p class="text-danger">{{ $errors->first('aircraft') }}</p>
        </div>
        <div class="form-group">
            <label for="">Number of stop</label>
            <input type="text" class="form-control" name="numberOfStop">
            <p class="text-danger">{{ $errors->first('numberOfStop') }}</p>
        </div>
        <div class="form-group">
            <label for="">Airline Name</label>
            <input type="text" class="form-control" name="airlineName">
            <p class="text-danger">{{ $errors->first('airlineName') }}</p>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status">
            <p class="text-danger">{{ $errors->first('status') }}</p>
        </div>
        <div class="form-group">
            <label for="">Ticket Price</label>
            <input type="text" class="form-control" name="ticketPrice">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
