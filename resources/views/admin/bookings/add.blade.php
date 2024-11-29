@extends('admin.layouts.layout')
@section('content')
    <h1>Add new Booking</h1>
    <form action="{{ route('route_booking_add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" class="form-control" name="fullName">
            <p class="text-danger">{{ $errors->first('fullName') }}</p>
        </div>
        <div class="form-group">
            <label for="">Phone number</label>
            <input type="text" class="form-control" name="phoneNumber">
            <p class="text-danger">{{ $errors->first('phoneNumber') }}</p>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
        <div class="form-group">
            <label for="">Booking Date</label>
            <input type="text" class="form-control datepicker" id="autoChooseDate" name="bookingDate">
            <p class="text-danger">{{ $errors->first('bookingDate') }}</p>
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
            <label for="">departure Date</label>
            <input type="text" class="form-control datepicker " name="departureDate">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>
        <div class="form-group">
            <label for="">Departure Time</label>
            <input type="text" class="form-control timepicker " name="departureTime">
            <p class="text-danger">{{ $errors->first('departureTime') }}</p>
        </div>

        <div class="form-group">
            <label for="">Ticket price</label>
            <input type="text" class="form-control" name="ticketPrice">
            <p class="text-danger">{{ $errors->first('ticketPrice') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Payment Status</label>
            <select class="form-control" name="paymentStatus" id="paymentStatus">
                <option value="Chưa thanh toán">Chưa thanh toán</option>
                <option value="Đã thanh toán">Đã thanh toán</option>
            </select>
            <p class="text-danger">{{ $errors->first('paymentStatus') }}</p>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Booking status</label>
            <select class="form-control" name="bookingStatus" id="bookingStatus">
                <option value="Chờ xử lý">Chờ xử lý</option>
                <option value="Đã xác nhận">Đã xác nhận</option>
                <option value="Hủy bỏ">Hủy bỏ</option>
            </select>
            <p class="text-danger">{{ $errors->first('bookingStatus') }}</p>
        </div>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
