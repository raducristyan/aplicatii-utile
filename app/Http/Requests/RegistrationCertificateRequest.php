<?php

namespace App\Http\Requests;


use App\Http\Requests\Request;

class RegistrationCertificateRequest extends Request
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
            'owner_type'          => 'required|in:person,company',
            'person'              => 'required_if:owner_type,person|exists:people,id,user_id,'.auth()->user()->id,
            'company'             => 'required_if:owner_type,company|exists:companies,id,user_id,'.auth()->user()->id,
            'category'            => 'required|exists:vehicle_categories,id,user_id,'.auth()->user()->id,
            'mark'                => 'required|exists:marks,id,user_id,'.auth()->user()->id,
            'mark_type'           => 'required',
            'displacement'        => 'digits_between:0,5',
            'hp'                  => 'digits_between:0,5',
            'engine_series'       => 'alpha_num',
            'chassis_series'      => 'alpha_num',
            'color'               => 'alpha',
            'card_series'         => 'alpha_num',
            'card_number'         => 'alpha_num',
            'registration_number' => 'required|digits_between:1,6',
        ];
    }
}
