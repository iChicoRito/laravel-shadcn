<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username'         => ['required', 'string', 'max:50', 'unique:tbl_users,username'],
            'email'            => ['required', 'email', 'max:100', 'unique:tbl_users,email'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required'  => 'Username is required.',
            'username.unique'    => 'This username is already taken.',
            'email.required'     => 'Email address is required.',
            'email.unique'       => 'This email is already registered.',
            'password.required'  => 'Password is required.',
            'password.min'       => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Passwords do not match.',
        ];
    }
}