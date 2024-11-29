@extends('admin.layouts.layout')
@section('content')
    <h1>Welcome to the Admin Page!</h1>
    <div class="row">
        <div class="col-lg-6">
            <h2>Flights Management</h2>
            <button type="button" class="btn btn-warning"><a href="{{ url('/admin/flight/add') }}">Thêm mới</a></button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Departure Airport</th>
                    <th>Arrival Airport</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>Arrival Date</th>
                    <th>Arrival Time</th>
                    <th>Flight Duration</th>
                    <th>Aircraft</th>
                    <th>Number of stop</th>
                    <th>Airline Name</th>
                    <th>Status</th>
                    <th>Ticket Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($flight as $fl)
                    <tr>
                        <td>{{$fl->idFlight}}</td>
                        <td>{{$fl->departureAirport}}</td>
                        <td>{{$fl->arrivalAirport}}</td>
                        <td>{{$fl->departureDate}}</td>
                        <td>{{$fl->dapartureTime}}</td>
                        <td>{{$fl->arrivalDate}}</td>
                        <td>{{$fl->arrivalTime}}</td>
                        <td>{{$fl->flightDuration}}</td>
                        <td>{{$fl->aircraft}}</td>
                        <td>{{$fl->numberOfStop}}</td>
                        <td>{{$fl->airlineName}}</td>
                        <td>{{$fl->status}}</td>
                        <td>{{$fl->ticketPrice}}</td>

                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a class="text-white"
                                   href="{{ route('route_flight_edit',['id'=>$fl->idFlight]) }}">Sửa</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a class="text-white" href="{{ route('route_flight_delete',['id'=>$fl->idFlight]) }}">Xóa</a>
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
