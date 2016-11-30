<?php

namespace App\Http\Controllers\Auth;

use App\ActivationToken;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Activate institution after registration
     * @param  Request $request token for activation
     * @return void
     */
     public function activate (ActivationToken $token)
    {
        $token->institution()->update([
            'active' => true
        ]);

        $token->delete();

        return redirect(route('login'));
    }

    public function resend($value='')
    {
        # code...
    }
}
