<?php

namespace App\Http\Controllers;


use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;

class AddressController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request)
    {
        $address = new Address();
        $address->street = $request->street;
        $address->number = $request->number;
        $address->bl = $request->bl;
        $address->sc = $request->sc;
        $address->ap = $request->ap;
        $address->postal_code = $request->postal_code;
        $address->village_id = $request->village_id;

        $user = auth()->user();
        $institution = auth()->user()->institution()->first();

        if ($request->owner === 'user') {
            $user->address()->updateOrCreate(['addressable_type' => 'App\User', 'addressable_id' => $user->id], $address->toArray());
        };

        if ($request->owner === 'institution') {
            $institution->address()->updateOrCreate(['addressable_type' => 'App\Institution', 'addressable_id' => $institution->id], $address->toArray());
        }
    }
}
