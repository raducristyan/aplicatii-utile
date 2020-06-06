<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Role;
use App\User;
use Validator;
use App\Institution;
use App\ActivationToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Events\InstitutionCreated;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'institution' => 'required|string',
            'cif'         => 'required|digits_between:6,10|unique:institutions',
            'first_name'  => 'required|max:255',
            'last_name'   => 'required|max:255',
            'email'       => 'required|email|max:255|unique:users',
            'password'    => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return $this->newAccount($data);
    }

    /**
     * Create new user and institution instances
     * @param  array  $data
     * @return User
     */
    private function newAccount(array $data)
    {
        $institution = Institution::create([
            'name'  => $data['institution'],
            'cif'   => $data['cif'],
        ]);

        $newUser = User::create([
            'first_name' => $data['first_name'],
            'last_name'  => $data['last_name'],
            'email'      => $data['email'],
            'password'   => bcrypt($data['password']),
            'institution_id' => $institution->id,
        ]);

        if ($institution && $newUser) {
            $token = new ActivationToken([
                'token' => Str::random(128),
            ]);

            $role = Role::where('name', 'admin')->first()->id;


            $institution->token()->save($token);
            $newUser->roles()->attach($role);

            event(new InstitutionCreated($institution));

            return $newUser;
        } else {
            $institution->delete();
            $newUser->delete();
            $token->delete();
        }
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        Auth::logout();

        return redirect('/login')->with('flash', ['body' => 'Contul dumneavoastră a fost creat. Verificați căsuța de email pentru activarea contului.', 'type' => 'success']);
    }
}
