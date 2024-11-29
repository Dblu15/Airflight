@extends('admin.layouts.layout')
@section('content')
    <h1>Add new Airline</h1>
    <form action="{{ route('route_airline_edit',['id'=>$airline->idAirline]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$airline->name}}">
        </div>
        <div class="form-group">
            <label for="">Country</label>
            <input type="text" class="form-control" name="country" value="{{$airline->country}}">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$airline->email}}">
        </div>
        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
@endsection
