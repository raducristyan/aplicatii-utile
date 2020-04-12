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
            'name' => 'required|string',
            'email' => 'required|email|unique:institutions,email,' . $id,
            'cif' => 'required|alpha_num|between:6,10',
            'phone' => 'min:10|max:12|nullable',
            'fax' => 'min:10|max:12|nullable',
            'bank' => 'string|nullable',
            'iban' => 'alpha_num|size:24|nullable',
        ];
    }
}
