@extends('admin.layouts.layout')
@section('content')
    <h1>Welcome to the Admin Page!</h1>
    <div class="row">
        <div class="col-lg-6">
            <h2>Airline Management</h2>
            <button type="button" class="btn btn-warning"><a href="{{ url('admin/airline/add') }}">Thêm mới</a></button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Email</th>

                </tr>
                </thead>
                <tbody>
                @foreach($airlines as $al)
                    <tr>
                        <td>{{$al->idAirline}}</td>
                        <td>{{$al->name}}</td>
                        <td>{{$al->country}}</td>
                        <td>{{$al->email}}</td>

                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a class="text-white" href="{{ route('route_airline_edit',['id'=>$al->idAirline]) }}">Sửa</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a class="text-white" href="{{ route('route_airline_delete',['id'=>$al->idAirline]) }}">Xóa</a>
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
