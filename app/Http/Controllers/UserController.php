<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

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
        $user = User::findOrFail($id);

        $this->authorize('update', $user);

        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = User::find($id)->get();

        dd($user, $id);

        if (auth()->user()->id != $request->id) {
            return response(['message' => 'Acțiune interzisă'], 403);
        }

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->job = $request->job;
        $user->mobile = $request->mobile;
        $user->phone = $request->phone;

        $user->save([$request]);

        return redirect()->route('dashboard.')->with('flash', ['body' => 'Profilul a fost actualizat.', 'type' => 'success']);
    }
}
