<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
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
                            "userName"=>"required",
                            "airline"=>"required",
                            "departureAirport"=>"required",
                            "arrivalAirport"=>"required",
                            "departureDate"=>"required",
                            "departureTime"=>"required",
                            "ticketType"=>"required",
                            "ticketPrice"=>"required|numeric|integer",
                            "seatNumber"=>"required|numeric|integer",
                        ];
                endswitch;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'userName.required' => 'Required to enter User name...',
            'airline.required'=>'Required to enter Airline...',
            'departureAirport.required'=>'Required to enter Departure Airport...',
            'arrivalAirport.required'=>'Required to enter Arrival Airport...',
            'departureDate.required'=>'Required to enter Departure date...',
            'departureTime.required'=>'Required to enter Departure Time...',
            'ticketType.required'=>'Required to enter Ticket type...',
            'ticketPrice.required'=>'Required to enter Ticket price...',
            'ticketPrice.numeric' => 'Ticket price required to enter number....',
            'ticketPrice.integer' => 'Ticket price required to enter number...',
            'seatNumber.required'=>'Required to enter Seat number...',
            'seatNumber.numeric' => 'Seat number required to enter number...',
            'seatNumber.integer' => 'Seat number required to enter number...',
        ];
    }
}
