@extends('admin.layouts.layout')
@section('content')
    <h1>Add new User</h1>
    <form action="{{ route('route_user_add') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <p class="text-danger">{{ $errors->first('name') }}</p> <!-- Hiển thị thông báo lỗi ngay dưới input -->
            @endif
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
            <p class="text-danger">{{ $errors->first('password') }}</p>
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber">
            <p class="text-danger">{{ $errors->first('phoneNumber') }}</p>
        </div>
        <div class="form-group ">
            <label for="exampleFormControlSelect1">Role</label>
            <select class="form-control" name="role" id="role">
                <option value="">...</option>
                <option value="Admin">Admin</option>
                <option value="staff">Staff</option>
                <option value="User">User</option>
                {{--                @foreach($role as $ro)--}}
                {{--                    <option value="{{$ro->name}}">{{$ro->name}}</option>--}}
                {{--                @endforeach--}}
            </select>
            <p class="text-danger">{{ $errors->first('role') }}</p>
        </div>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
