@extends('templates.layoutFindFlight')
@section('findFlight')
    <form action="{{ route('findFlight') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="get-flight__form-input-box">
                    <input type="text" placeholder="Fly from" name="departureAirport" autocomplete="off">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="get-flight__form-input-box">
                    <input type="text" placeholder="Fly to" name="arrivalAirport" autocomplete="off">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="get-flight__form-input-box">
                    <input type="text" name="departureDate" placeholder="Select date" id="datepicker"
                           autocomplete="off">
                    <div class="get-flight__icon-box">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="get-flight__form-input-box">
                    <input type="text" class="form-control" id="timepicker" name="departureTime" autocomplete="off"
                           placeholder="Select time">
                    <p class="text-danger">{{ $errors->first('departureTime') }}</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="get-flight__form-input-box">
                    <button type="submit" class="thm-btn get-flight__btn">Book Now</button>
                </div>
            </div>
        </div>
    </form>
@endsection
