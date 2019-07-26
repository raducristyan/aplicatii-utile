<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'street' => 'string|nullable|min:4:max:50',
            'number' => 'string|nullable|min:1|max:5',
            'bl' => 'string|nullable|min:1|max:5',
            'sc' => 'string|nullable|min:1|max:5',
            'ap' => 'string|nullable|min:1|max:5',
            'postal_code' => 'digits:6|nullable',
            'village_id' => 'required|integer|exists:villages,id',
            'owner' => 'required|in:user,institution',
        ];
    }
}
