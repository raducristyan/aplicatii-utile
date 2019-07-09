<?php

namespace App\Http\Controllers;


use Auth;
use App\User;
use App\City;
use App\Person;
use App\Address;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\PersonRequest;

class PersonController extends Controller
{

    protected $user;

    public function __construct (User $user)
    {
        $this->user = Auth::user();
    }

    /**
     * Get people that belongs to a user
     *
     * @return array
     */
    public function index ()
    {
        # code...
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Api\PersonRequest  $request
     * @return array
     */
    public function store(PersonRequest $request)
    {
        if (!$request) {
            return redirect(route('myapps.rc.create'))->withImput();
        }
        $person = new Person([
            'name'  => $request->input('name'),
            'cnp'   => $request->input('cnp'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

        $this->user->people()->save($person);

        $address = new Address([
            'street'      => $request->input('street'),
            'number'      => $request->input('street_nr'),
            'bl'          => $request->input('bl'),
            'sc'          => $request->input('sc'),
            'ap'          => $request->input('ap'),
            'postal_code' => $request->input('postal_code')
        ]);

        $city = City::where('id', $request->input('city'))->first();
        $city->addresses()->save($address);

        $person->addresses()->save($address);

        return redirect(route('myapps.rc.create'))->withSuccess("Persoana ".$person->name." a fost adăugată cu succes!");

    }
}
