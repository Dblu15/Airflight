@extends('admin.layouts.layout')
@section('content')
    <h1>Add new User</h1>
    <form action="{{ route('route_user_edit',['id'=>$user->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" value="{{$user->password}}">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" class="form-control" name="phoneNumber" value="{{$user->phoneNumber}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Role</label>
            <select class="form-control" name="role" id="role">
                {{--                @foreach($roles as $role)--}}
                {{--                    <option {{ $role->id == $user->id ? "selected" : "" }}--}}
                {{--                            value="{{ $role->id }}">{{ $role->name }}</option>--}}
                {{--                @endforeach--}}
                <option value="{{$user->role}}">{{$user->role}}</option>
                @if($user->role != "Admin")
                    <option value="Admin">Admin</option>
                @endif
                @if($user->role != "Staff")
                    <option value="Staff">Staff</option>
                @endif
                @if($user->role != "User")
                    <option value="User">User</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
@endsection
