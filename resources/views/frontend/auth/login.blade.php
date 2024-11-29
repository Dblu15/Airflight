@extends('frontend.templates.layoutClient')
@section('content')
    <h1 class="text-center">Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <br>
        <p>Have a account?<a href="{{ route('route_createAccount') }}" class="text-primary">Crate account</a></p>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
