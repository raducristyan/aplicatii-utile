<?php

namespace App\Http\Controllers\Apps;


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
        auth()->user()->save($request->toArray());
        dd(auth()->user()->address);
    }
}
