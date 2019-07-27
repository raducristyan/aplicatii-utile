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
        $id = request()->user_id;
        return [
            'email' => 'required|email|unique:users,email,' . $id,
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'job' => 'required|string|min:3|max:50',
            'mobile' => 'min:10|max:12',
            'phone' => 'min:10|max:12',
        ];
    }
}
