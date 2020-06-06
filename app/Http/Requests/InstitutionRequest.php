<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionRequest extends FormRequest
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
        $id = request()->id;
        return [
            'name' => 'required|regex:/^[A-Za-z0-9âîșță\s-]+$/i',
            'email' => 'required|email|unique:institutions,email,' . $id,
            'cif' => 'required|alpha_num|between:6,10',
            'phone' => 'min:10|max:12|regex:/^\s*(?:\+?(\d{1,3}))?([\s]*(\d{3})[\s]*)?((\d{3})[\s]*(\d{2,4})(?:[\s]{1,3}(\d+))?)\s*$/|nullable',
            'fax' => 'min:10|max:15|regex:/^\s*(?:\+?(\d{1,3}))?([\s]*(\d{3})[\s]*)?((\d{3})[\s]*(\d{2,4})(?:[\s]{1,3}(\d+))?)\s*$/|nullable',
            'bank' => 'nullable|regex:/^[A-Za-zâîșță\s&.-]+$/i',
            'iban' => 'alpha_num|size:24|nullable',
        ];
    }
}
