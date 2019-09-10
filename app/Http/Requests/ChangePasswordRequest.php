<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'user_email' => 'required|email|exists:users,email',
            'old_password' => 'required|min:6',
            'new_password' => 'required|string|confirmed|min:6'
        ];
    }

    /**
     * Return error masseges for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_email.email' => 'Adresa de email furnizată nu este corectă',
            'user_email.required' => 'Nu ați furnizat adresa de email',
            'user_email.exists' => 'Adresa de email furnizată nu există în baza de date',
            'old_password.required' => 'Parola curentă nu este corectă',
            'new_password.required' => 'Nu ați furnizat noua parolă',
            'new_password.string' => 'Parola furnizată conține caractere nepermise',
            'new_password.confirmed' => 'Noua parolă nu a fost confirmată',
            'new_password.min' => 'Noua parolă trebuie să conțină minim 6 caractere'
        ];
    }
}
