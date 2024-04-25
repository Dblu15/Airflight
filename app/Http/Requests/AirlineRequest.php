<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirlineRequest extends FormRequest
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
                            "email"=>"required ",
                            "name"=>"required",
                            "country"=>"required"
                        ];
                endswitch;
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Required to enter name...',
            'email.required'=>'Required to enter email...',
            'email.unique' => 'Email already exists...',
            'country.required'=>'Required to enter country...'
        ];
    }
}
