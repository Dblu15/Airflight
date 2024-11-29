@extends('admin.layouts.layout')
@section('content')
    <h1>Welcome to the Admin Page!</h1>
    <div class="row">
        <div class="col-lg-6">
            <h2>Ticket Management</h2>
            <button type="button" class="btn btn-warning"><a href="{{ url('/admin/ticket/add') }}">Thêm mới</a></button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID Ticket</th>
                    <th>User name</th>
                    <th>Airline</th>
                    <th>Departure Airport</th>
                    <th>Arrival Airport</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Ticket Type</th>
                    <th>Ticket Price</th>
                    <th>Seat Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $tk)
                    <tr>
                        <td>{{$tk->idTicket}}</td>
                        <td>{{$tk->userName}}</td>
                        <td>{{$tk->airline}}</td>
                        <td>{{$tk->departureAirport}}</td>
                        <td>{{$tk->arrivalAirport}}</td>
                        <td>{{$tk->departureDate}}</td>
                        <td>{{$tk->departureTime}}</td>
                        <td>{{$tk->ticketType}}</td>
                        <td>{{$tk->ticketPrice}}</td>
                        <td>{{$tk->seatNumber}}</td>

                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a class="text-white"
                                   href="{{ route('route_ticket_edit',['id'=>$tk->idTicket]) }}">Sửa</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a class="text-white" href="{{ route('route_ticket_delete',['id'=>$tk->idTicket]) }}">Xóa</a>
                            </button>
                        </td>
                    </tr>
                @endforeach


                <!-- More user data can be added here -->
                </tbody>
            </table>
        </div>

    </div>
@endsection
