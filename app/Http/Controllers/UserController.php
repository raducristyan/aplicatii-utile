<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\AddUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddUserRequest $request)
    {
        $institution = auth()->user()->institution;
        $user = new User(
            [
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'last_name' => $request->last_name,
                'job' => $request->job,
                'password'   => bcrypt($request->password),
            ]
        );
        $institution->users()->save($user);
        $role = Role::where('name', 'user')->first()->id;

        $user->roles()->attach($role);

        return response([], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        $user = auth()->user();

        if (auth()->user()->id != $request->id) {
            return response(['message' => 'Acțiune interzisă'], 403);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->job = $request->job;
        $user->mobile = $request->mobile;
        $user->phone = $request->phone;

        $user->save([$request]);

        return response(['message' => 'Profilul a fost actualizat.'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
