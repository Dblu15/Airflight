<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
class UserRequest extends FormRequest
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
                            "password"=>"required",
                            "phoneNumber" => ["required", "regex:/^\+?[0-9]+$/"],
                            "role"=>"required"
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
            'password.required'=>'Required to enter password...',
            'phoneNumber.required'=>'Required to enter phone number...',
            'phoneNumber.regex'=>'Phone number is not valid...',
            'role.required'=>'Required to enter role...'
        ];
    }
}
