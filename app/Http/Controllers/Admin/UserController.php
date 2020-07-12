<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use App\Institution;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.admin.users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $institution = auth()->user()->institution;
        $user = new User(
            [
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'job' => $request->job,
                'mobile' => $request->mobile,
                'phone' => $request->phone,
                'password'   => bcrypt($request->password),
            ]
        );
        $institution->users()->save($user);
        $role = Role::where('name', 'user')->first()->id;

        $user->roles()->attach($role);

        return redirect()->route('dashboard.admin.user.index')->with('flash', ['body' => 'Utilizatorul a fost creat.', 'type' => 'success']);
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
        $user = User::find($id);

        $this->authorize('update', $user);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->job = $request->job;
        $user->mobile = $request->mobile;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('dashboard.admin.user.index')->with('flash', ['body' => 'Profilul a fost actualizat.', 'type' => 'success']);
    }

    /**
     * Delete the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $institution = Institution::findOrFail(auth()->user()->institution->id);
        $user = $institution->users()->get()->find($id);

        $this->authorize('delete', $user);

        if ($user !== null) {
            $user->delete();
            return redirect()->back()->with('flash', ['body' => 'Utilizatorul a fost șters.']);
        }

        return redirect()->back()->with('flash', ['body' => 'Utilizatorul nu a fost șters.', 'type' => 'danger']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institution = Institution::findOrFail(auth()->user()->institution->id);
        $user = $institution->users()->withTrashed()->get()->find($id);

        $this->authorize('forceDelete', $user);

        if (($user !== null) && $user->trashed()) {
            $user->forceDelete();
            return redirect()->back()->with('flash', ['body' => 'Utilizatorul a fost șters.']);
        }

        return redirect()->back()->with('flash', ['body' => 'Utilizatorul nu a fost șters.', 'type' => 'danger']);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $institution = Institution::findOrFail(auth()->user()->institution->id);
        $user = $institution->users()->withTrashed()->get()->find($id);

        $this->authorize('restore', $user);

        if (($user !== null) && $user->trashed()) {
            $user->restore();
            return redirect()->back()->with('flash', ['body' => 'Utilizatorul a fost restaurat.', 'type' => 'success']);
        }

        return redirect()->back()->with('flash', ['body' => 'Utilizatorul nu a putut fi restaurat.', 'type' => 'error']);
    }
}
