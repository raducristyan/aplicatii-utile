<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
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
            'email' => 'required|email|unique:users,email,' . $this->user,
            'first_name' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'last_name' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'job' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'mobile' => 'nullable|min:10|max:15',
            'phone' => 'nullable|min:10|max:15',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => 'adresa de amail',
            'first_name' => 'prenume',
            'last_name' => 'nume',
            'job' => 'functia',
            'mobile' => 'telefon mobil',
            'phone' => 'numar de telefon'
        ];
    }
}
