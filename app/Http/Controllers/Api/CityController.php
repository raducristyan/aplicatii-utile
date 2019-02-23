<?php

namespace App\Http\Controllers\Api;

use App\City;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    /**
   * Get all villages of a city.
   *
   * @return array
   */
  public function getvillages(CityRequest $request)
  {
    $city = City::where('id', $request->city_id)->first();
    $villages = Village::where('city_siruta', '=', $city->siruta)->orderBy('name')->get();
    return response()->json($villages);
  }
}
