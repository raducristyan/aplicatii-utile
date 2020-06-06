<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,' . request()->id,
            'first_name' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'last_name' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'job' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i|min:3|max:50',
            'mobile' => 'nullable|min:10|max:15',
            'phone' => 'nullable|min:10|max:15',
        ];
    }
}
