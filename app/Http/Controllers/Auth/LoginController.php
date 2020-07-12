<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {

        if (!$user->institution->active && $user->isAdmin()) {
            Auth::logout($user);

            return redirect('/login')->with('flash', ['body' => 'Vă rugăm să activați contul instituției. <a class="font-medium text-indigo-500 hover:text-indigo-700 underline" href="' . route('activate.resend') . '?email=' . $user->email . '">Retransmite email-ul pentru activare.</a>', 'type' => 'info']);
        }

        if (!$user->institution->active && !$user->isAdmin()) {
            Auth::logout($user);

            return redirect('/login')->with('flash', ['body' => 'Contul instituției nu a fost activat. Contactați administratorul contului', 'type' => 'info']);
        }
    }
}
