@extends('admin.layouts.layout')
@section('content')
    <h1>Add new Airline</h1>
    <form action="{{ route('route_airline_add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
            <p class="text-danger">{{ $errors->first('name') }}</p>
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <input type="text" class="form-control" name="country">
            <p class="text-danger">{{ $errors->first('country') }}</p>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
            <p class="text-danger">{{ $errors->first('email') }}</p>
        </div>
        <button type="submit" class="btn btn-success">ADD</button>
    </form>
@endsection
