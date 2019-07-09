<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompanyRequest extends Request
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
            'company_name'        => 'required|min:6',
            'cif'                 => 'required|digits_between:6,10',
            'j'                   => 'min:10,max:16',
            'company_email'       => 'email',
            'authorized_name'     => 'required|min:6',
            'authorized_cnp'      => 'required|digits:13',
            'city'                => 'required|exists:cities,id',
            'company_street'      => 'required',
            'company_street_nr'   => 'required',
            'company_bl'          => 'alpha_num',
            'company_sc'          => 'alpha_num',
            'company_ap'          => 'alpha_num',
            'company_postal_code' => 'digits:6',
        ];
    }
}
