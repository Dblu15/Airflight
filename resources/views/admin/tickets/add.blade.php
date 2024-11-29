@extends('admin.layouts.layout')
@section('content')
    <h1>Add new Ticket</h1>
    <form action="{{ route('route_ticket_add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">User name</label>
            <input type="text" class="form-control" name="userName">
            <p class="text-danger">{{ $errors->first('userName') }}</p>
        </div>
        <div class="form-group">
            <label for="">Airline</label>
            <input type="text" class="form-control" name="airline">
            <p class="text-danger">{{ $errors->first('airline') }}</p>
        </div>

        <div class="form-group">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control " name="departureAirport">
            <p class="text-danger">{{ $errors->first('departureAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control " name="arrivalAirport">
            <p class="text-danger">{{ $errors->first('arrivalAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure date</label>
            <input type="text" class="form-control datepicker " name="departureDate">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker " name="departureTime">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Ticket type</label>
            <select class="form-control" name="ticketType" id="ticketType">
                <option value="">...</option>
                <option value="Hạng nhất">Hạng nhất</option>
                <option value="Hạng thương gia">Hạng thương gia</option>
                <option value="Hạng phổ thông đặc biệt">Hạng phổ thông đặc biệt</option>
                <option value="Hạng phổ thông">Hạng phổ thông</option>
            </select>
            <p class="text-danger">{{ $errors->first('ticketType') }}</p>
        </div>
        <div class="form-group">
            <label for="">Ticket price</label>
            <input type="text" class="form-control" name="ticketPrice">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <div class="form-group">
            <label for="">Seat number</label>
            <input type="text" class="form-control" name="seatNumber">
            <p class="text-danger">{{ $errors->first('seatNumber') }}</p>
        </div>

        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
