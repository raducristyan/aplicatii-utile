<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VehicleRequest extends Request
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
            'mark'                => 'required|alpha_num',
            'type'                => 'required|alpha_num',
            'displacement'        => 'required|numeric',
            'engine_series'       => 'required_if:chassis_series,NULL',
            'chassis_series'      => 'required_if:engine_series,NULL',
            'power'               => 'numeric',
            'color'               => 'required|alpha_num',
            'card_series'         => 'alpha_num',
            'card_number'         => 'alpha_num',
            'registration_number' => 'required|numeric'
        ];
    }
}
