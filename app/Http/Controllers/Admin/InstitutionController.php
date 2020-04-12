<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionRequest;

class InstitutionController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstitutionRequest $request)
    {
        $institution = auth()->user()->institution;

        if ($institution->id !== (int) $request->id) {
            return response(['Nu aveți drepturi suficiente pentru a actualiza această resursă'], 403);
        }

        $institution->name = $request->name;
        $institution->email = $request->email;
        $institution->phone = $request->phone;
        $institution->fax = $request->fax;
        $institution->bank = $request->bank;
        $institution->iban = $request->iban;

        $institution->save([$request]);

        return response([], 201);
    }
}
