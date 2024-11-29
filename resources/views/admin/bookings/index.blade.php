@extends('templates.layout')
@section('content')
    <h1>Welcome to the Admin Page!</h1>
    <div class="row">
        <div class="col-lg-6">
            <h2>Booking Management</h2>
            <button type="button" class="btn btn-warning"><a href="{{ url('/booking/add') }}">Thêm mới</a></button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID Booking</th>
                    <th>Full name</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Booking Date</th>
                    <th>Departure Airport</th>
                    <th>Arrival Airport</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Ticket Price</th>
                    <th>Payment status</th>
                    <th>Booking status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($booking as $bk)
                    <tr>
                        <td>{{$bk->idBooking}}</td>
                        <td>{{$bk->fullName}}</td>
                        <td>{{$bk->phoneNumber}}</td>
                        <td>{{$bk->email}}</td>
                        <td>{{$bk->bookingDate}}</td>
                        <td>{{$bk->departureAirport}}</td>
                        <td>{{$bk->arrivalAirport}}</td>
                        <td>{{$bk->departureDate}}</td>
                        <td>{{$bk->departureTime}}</td>
                        <td>{{$bk->ticketPrice}}</td>
                        <td>{{$bk->paymentStatus}}</td>
                        <td>{{$bk->bookingStatus}}</td>

                        <td><button type="button" class="btn btn-primary ">
                                <a class="text-white" href="{{ route('route_booking_edit',['id'=>$bk->idBooking]) }}">Sửa</a>
                            </button></td>
                        <td><button type="button" class="btn btn-danger">
                                <a class="text-white" href="{{ route('route_booking_delete',['id'=>$bk->idBooking]) }}">Xóa</a>
                            </button></td>
                    </tr>
                @endforeach


                <!-- More user data can be added here -->
                </tbody>
            </table>
        </div>

    </div>
@endsection
