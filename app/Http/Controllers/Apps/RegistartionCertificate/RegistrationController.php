<?php

namespace App\Http\Controllers\Apps\RegistartionCertificate;

use DB;
use Auth;
use Session;
use App\User;
use App\County;
use App\Vehicle;
use App\MarkType;
use Illuminate\Http\Request;
use App\RegistrationCertificate;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests\RegistrationCertificateRequest;

class RegistrationController extends Controller
{
    protected $user;

    public function __construct (User $user)
    {
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $user = $this->user->load(['people.vehicles' => function ($q) use (&$v){
        //     $v = $q->get();
        // }]);
        //
        $user = User::with('people.vehicles',
                           'companies.vehicles')->find($this->user->id);


        $v_people = collect($this->user->people->lists('vehicles'));
        $v_companies = collect($this->user->companies->lists('vehicles'));
        $v = $v_people->merge($v_companies);
        $v = array_collapse($v);
// dd($v);
        return view('apps.rc.index', compact(['v']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $people = $this->user->people()->orderBy('name', 'asc')->get();
      $companies = $this->user->companies()->orderBy('name', 'asc')->get();
      $counties = County::orderBy('name', 'asc')->get();
      $marks = $this->user->marks()->orderBy('mark', 'asc')->get();
      $vehicleCategories = $this->user->vehicleCategories;

      return view('apps.rc.create', compact('people', 'counties', 'marks', 'companies', 'vehicleCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationCertificateRequest $request)
    {
        // dd($request);

        $owner_type = $request->input('owner_type');
        if ($owner_type === 'person') {
            $owner = $this->user->people()->where('id', $request->input('person'))->first();
        } elseif ($owner_type === 'company') {
            $owner = $this->user->companies()->where('id', $request->input('company'))->first();
        }

        $category = $this->user->vehicleCategories()->where('id', $request->input('category'))->first();

        $mark = $this->user->marks()->where('id', $request->input('mark'))->first();
        $mark_type = MarkType::firstOrNew([
            'type' => $request->input('mark_type'),
        ]);
        $mark->types()->save($mark_type);
        $mark_type->save();

        $vehicle = new Vehicle([
            'displacement'        => $request->input('displacement'),
            'hp'                  => $request->input('hp'),
            'engine_series'       => $request->input('engine_series'),
            'chassis_series'      => $request->input('chassis_series'),
            'color'               => $request->input('color'),
            'card_series'         => $request->input('card_series'),
            'card_number'         => $request->input('card_number'),
        ]);

        $owner->vehicles()->save($vehicle);
        $mark_type->vehicles()->save($vehicle);
        $category->vehicles()->save($vehicle);

        $registration_number = new RegistrationCertificate([
            'number' => $request->input('registration_number')
        ]);

        $vehicle->registrationNumber()->save($registration_number);

        return redirect(route('myapps.rc.index'))->withSuccess("Vehicolul marca ".$mark->mark." având numărul de înregistrare ".$registration_number->number." a fost adăugat cu succes!");
       }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = $this->user->with('people.vehicles')->get();
        // dd($vehicle);

        return view('apps.rc.show', compact('vehicle'));
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
    public function update(Request $request, $id)
    {
        //
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
