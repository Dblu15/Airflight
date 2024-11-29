@extends('templates.layout')
@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('route_booking_edit',['id'=>$booking->idBooking]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullName" value="{{$booking->fullName}}">
            <p class="text-danger">{{ $errors->first('fullName') }}</p>
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{$booking->phoneNumber}}">
            <p class="text-danger">{{ $errors->first('phoneNumber') }}</p>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$booking->email}}">
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
        <div class="form-group">
            <label for="">Booking Date</label>
            <input type="text" class="form-control datepicker" id="autoChooseDate" name="bookingDate" value="{{$booking->bookingDate}}">
            <p class="text-danger">{{ $errors->first('bookingDate') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Airport</label>
            <input type="text" class="form-control " name="departureAirport" value="{{$booking->departureAirport}}">
            <p class="text-danger">{{ $errors->first('departureAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">Arrival Airport</label>
            <input type="text" class="form-control " name="arrivalAirport" value="{{$booking->arrivalAirport}}">
            <p class="text-danger">{{ $errors->first('arrivalAirport') }}</p>
        </div>
        <div class="form-group">
            <label for="">departure Date</label>
            <input type="text" class="form-control datepicker " name="departureDate" value="{{$booking->departureDate}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker " name="departureTime" value="{{$booking->departureTime}}">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>

        <div class="form-group">
            <label for="">Ticket price</label>
            <input type="text" class="form-control" name="ticketPrice" value="{{$booking->ticketPrice}}">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Payment Status</label>
            <select class="form-control" name="paymentStatus" id="paymentStatus">
                <option value="{{$booking->paymentStatus}}">{{$booking->paymentStatus}}</option>
                @if($booking->paymentStatus != "Chưa thanh toán")
                    <option value="Chưa thanh toán">Chưa thanh toán</option>
                @endif
                @if($booking->paymentStatus != "Đã thanh toán")
                    <option value="Đã thanh toán">Đã thanh toán</option>
                @endif
            </select>
            <p class="text-danger">{{ $errors->first('paymentStatus') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Booking status</label>
            <select class="form-control" name="bookingStatus" id="bookingStatus">
                <option value="{{$booking->bookingStatus}}">{{$booking->bookingStatus}}</option>
                @if($booking->bookingStatus != "Chờ xử lý")
                    <option value="Chờ xử lý">Chờ xử lý</option>
                @endif
                @if($booking->bookingStatus != "Đã xác nhận")
                    <option value="Đã xác nhận">Đã xác nhận</option>
                @endif
                @if($booking->bookingStatus != "Hủy bỏ")
                    <option value="Hủy bỏ">Hủy bỏ</option>
                @endif
            </select>
            <p class="text-danger">{{ $errors->first('bookingStatus') }}</p>
        </div>
        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
@endsection
