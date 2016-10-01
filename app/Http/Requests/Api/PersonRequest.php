<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class PersonRequest extends Request
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
            'name'        => 'required|min:6',
            'cnp'         => 'required|digits:13',
            'email'       => 'email',
            'phone'       => 'digits:10,20',
            'city'        => 'required|exists:cities,id',
            'street'      => 'required',
            'street_nr'   => 'required',
            'bl'          => 'alpha_num',
            'sc'          => 'alpha_num',
            'ap'          => 'alpha_num',
            'postal_code' => 'digits:6',

        ];
    }
}
