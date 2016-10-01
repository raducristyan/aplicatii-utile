<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\VehicleCategory;
use App\Http\Requests\VehicleCategoryRequest;
use App\Http\Controllers\Controller;

class VehicleCategoryController extends Controller
{
    protected $user;

    public function __construct (User $user)
    {
        $this->user = Auth::user();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Api\MarkRequest  $request
     * @return array
     */
     public function store(VehicleCategoryRequest $request)
     {
         $category = new VehicleCategory([
             'category' => $request->input('category'),
         ]);

         $this->user->vehicleCategories()->save($category);

         return redirect(route('myapps.rc.create'))->withSuccess("Categoria ".$category->category." pentru vehicole a fost adăugată cu succes!");

     }
}
