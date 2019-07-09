<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use App\City;
use App\Company;
use App\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CompanyRequest;

class CompanyController extends Controller
{
    protected $user;

    public function __construct (User $user)
    {
        $this->user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Api\PersonRequest  $request
     * @return array
     */
    public function store(CompanyRequest $request)
    {
        $company = new Company([
            'name'       => $request->input('company_name'),
            'cif'        => $request->input('cif'),
            'j'          => $request->input('j'),
            'email'      => $request->input('company_email'),
            'phone'      => $request->input('company_phone'),
            'authorized' => $request->input('authorized_name'),
            'cnp'        => $request->input('authorized_cnp'),
            'iban'       => $request->input('iban'),
            'bank'       => $request->input('bank'),
        ]);

        $this->user->companies()->save($company);

        $address = new Address([
            'street'      => $request->input('company_street'),
            'number'      => $request->input('company_street_nr'),
            'bl'          => $request->input('company_bl'),
            'sc'          => $request->input('company_sc'),
            'ap'          => $request->input('company_ap'),
            'postal_code' => $request->input('company_postal_code')
        ]);

        $city = City::where('id', $request->input('city'))->first();
        $city->addresses()->save($address);

        $company->addresses()->save($address);

        return redirect(route('myapps.rc.create'))->withSuccess("Firma ".$company->name." a fost adăugată cu succes!");

    }
}
