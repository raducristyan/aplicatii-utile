<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;


class ChangePasswordController extends Controller
{


    public function changePassword(ChangePasswordRequest $request)
    {
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords matches

            return response()->json(
                ['errors' => ['old_password' => ['Parola curentă specificată nu este corectă.']]],
                422
            );
        }
        if (strcmp($request->get('old_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same

            return response()->json(
                ['errors' => ['new_password' => ['Noua parolă nu poate fi aceeași cu vechea parolă. Alegeți o parolă diferită.']]],
                422
            );
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();

        session()->put(['flash' => ['body' => "Parola a fost schimbată cu succes !", 'type' => 'success']]);

        return response([], 200);
    }
}
