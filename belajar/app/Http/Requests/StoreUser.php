<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Name is reuired',
            'email.required' => 'Email is required',
            'email.unique' => 'This Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Minimum Character Password : 8'
        ];
    }
}
