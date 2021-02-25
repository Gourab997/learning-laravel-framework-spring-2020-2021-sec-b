<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required | min:5 | unique:users|bail',
            'password' => 'required | max:8'
        ];
    }

    public function messages()
    {
        return[
'username.required' => 'cannot empty'
        ];
    }
}
