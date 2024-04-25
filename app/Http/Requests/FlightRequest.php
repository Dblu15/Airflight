<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
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
                            "departureAirport"=>"required ",
                            "arrivalAirport"=>"required",
                            "departureDate"=>"required",
                            "dapartureTime"=>"required",
                            "arrivalDate"=>"required",
                            "arrivalTime"=>"required",
                            "flightDuration"=>"required",
                            "aircraft"=>"required",
                            "numberOfStop"=>"required",
                            "airlineName"=>"required",
                            "status"=>"required",
                            "ticketPrice"=>"required"
                        ];
                endswitch;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'departureAirport.required' => 'Required to enter Departure Airport...',
            'arrivalAirport.required'=>'Required to enter Arrival Airport...',
            'departureDate.required' => 'Required to enter Departure Date...',
            'dapartureTime.required'=>'Required to enter Departure Time...',
            'arrivalDate.required'=>'Required to enter Arrival Date...',
            'arrivalTime.required'=>'Required to enter Arrival Time...',
            'flightDuration.required'=>'Required to enter Flight Duration...',
            'aircraft.required'=>'Required to enter Aircraft...',
            'numberOfStop.required'=>'Required to enter Number of stop...',
            'airlineName.required'=>'Required to enter Airline Name...',
            'status.required'=>'Required to enter Status...',
            'ticketPrice.required'=>'Required to enter Ticket Price...'
        ];
    }
}
