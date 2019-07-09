<?php

namespace App\Http\Controllers\Apps;

use Input;

use App\City;
use App\County;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountyRequest;

class CountyController extends Controller
{
  /**
   * Get all cities of a county.
   *
   * @return array
   */
  public function getCities(CountyRequest $request)
  {
    $county = County::where('id', $request->county_id)->first();
    $cities = City::where('county_siruta', '=', $county->siruta)->orderBy('name')->get();
    return response()->json($cities);
  }
}
