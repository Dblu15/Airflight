<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()) :
            case 'POST' :
                switch ($currentAction) :
                    case 'add' :
                        $rules = [
                            "fullName"=>"required",
                            "phoneNumber"=>["required", "regex:/^\+?[0-9]+$/"],
                            "email"=>"required",
                            "bookingDate"=>"required",
                            "departureAirport"=>"required",
                            "arrivalAirport"=>"required",
                            "departureDate"=>"required",
                            "departureTime"=>"required",
                            "ticketPrice"=>"required|numeric|integer",
                            "paymentStatus"=>"required",
                            "bookingStatus"=>"required"
                        ];
                endswitch;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'fullName.required'=>'Required to enter Full Name...',
            'phoneNumber.required' => 'Required to enter Phone number...',
            'phoneNumber.regex'=>'Phone number is not valid...',
            'email.required'=>'Required to enter Departure Email...',
            'bookingDate.required'=>'Required to enter Booking Date...',
            'departureAirport.required'=>'Required to enter Departure Airport...',
            'arrivalAirport.required'=>'Required to enter Arrival Airport...',
            'departureDate.required'=>'Required to enter Departure Date...',
            'departureTime.required'=>'Required to enter Departure Time...',
            'ticketPrice.required'=>'Required to enter Ticket Price...',
            'ticketPrice.numeric' => 'ID user is not a number...',
            'ticketPrice.integer' => 'ID user is not a number...',
            'paymentStatus.required'=>'Required to enter Payment Status...',
            'bookingStatus.required'=>'Required to enter Booking status...'
        ];
    }
}
