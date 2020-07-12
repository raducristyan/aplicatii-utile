<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use App\Institution;
use App\ActivationToken;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Events\InstitutionCreated;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
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
    protected $redirectTo = '/';

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
     * @return \Illuminate\Support\Facades\Validator
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
            'terms_and_conditions' => 'accepted',
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
    protected function newAccount(array $data)
    {
        $token = new ActivationToken([
            'token' => Str::random(128),
        ]);

        $role = Role::where('name', 'admin')->first();

        DB::transaction(function () use ($data, $role, $token) {
            $institution = $this->createInstitution($data);
            $user = $this->createUser($data, $institution);

            $institution->token()->save($token);
            $user->roles()->attach($role);

            event(new InstitutionCreated($institution));

            return $user;
        });
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
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
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/login')->with('flash', ['body' => 'Contul dumneavoastră a fost creat. Verificați căsuța de email pentru activarea contului.', 'type' => 'success']);
    }

    protected function createInstitution($institution)
    {
        $institution = Institution::create([
            'name'  => $institution['institution'],
            'cif'   => $institution['cif'],
            'terms_and_conditions' => $institution['terms_and_conditions'],
        ]);
        return $institution;
    }

    protected function createUser($user, $institution)
    {
        $newUser = User::create([
            'first_name' => $user['first_name'],
            'last_name'  => $user['last_name'],
            'email'      => $user['email'],
            'password'   => bcrypt($user['password']),
            'institution_id' => $institution->id,
        ]);
        return $newUser;
    }
}
