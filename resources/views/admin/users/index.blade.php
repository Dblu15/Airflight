@extends('admin.layouts.layout')
@section('content')
    <h1>Welcome to the Admin Page!</h1>
    <div class="row">
        <div class="col-lg-12">
            <h2>User Management</h2>
            <button type="button" class="btn btn-warning"><a href="{{ url('/admin/user/add') }}">Thêm mới</a></button>
            <br><br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $us)
                    <tr>
                        <td>{{$us->id}}</td>
                        <td>{{$us->name}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{$us->password}}</td>
                        <td>{{$us->phoneNumber}}</td>
                        <td>{{$us->role}}</td>
                        <td>
                            <button type="button" class="btn btn-primary ">
                                <a class="text-white" href="{{ route('route_user_edit',['id'=>$us->id]) }}">Sửa</a>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <a class="text-white" href="{{ route('route_user_delete',['id'=>$us->id]) }}">Xóa</a>
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
