@extends('templates.layoutFindFlight')
@section('findFlight')
    <form action="{{ route('findFlight') }}" method="POST" >
        @csrf
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullName" value="{{$booking->fullName}}" autocomplete="off">
            <p class="text-danger">{{ $errors->first('fullName') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Phone number</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{$booking->phoneNumber}}" autocomplete="off">
            <p class="text-danger">{{ $errors->first('phoneNumber') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$booking->email}}" autocomplete="off">
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Booking Date</label>
            <input type="text" class="form-control datepicker" id="dateInput" name="bookingDate" autocomplete="off" value="{{$booking->bookingDate}}">
            <p class="text-danger">{{ $errors->first('bookingDate') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control " name="departureAirport" autocomplete="off" value="{{$booking->departureAirport}}">
            <p class="text-danger">{{ $errors->first('departureAirport') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control " name="arrivalAirport" autocomplete="off" value="{{$booking->arrivalAirport}}">
            <p class="text-danger">{{ $errors->first('arrivalAirport') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">departure Date</label>
            <input type="text" class="form-control datepicker " name="departureDate" autocomplete="off" value="{{$booking->departureDate}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker " name="departureTime" autocomplete="off" value="{{$booking->departureTime}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>

        <div class="col-md-8 mx-auto d-block get-flight__form-input-box">
            <label for="">Ticket price</label>
            <input type="text" class="form-control" name="ticketPrice" autocomplete="off" value="200">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <button type="submit" class="btn btn-success col-md-8 mx-auto d-block get-flight__form-input-box">UPDATE</button>
    </form>
@endsection
