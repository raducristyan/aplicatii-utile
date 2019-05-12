<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Village;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CityRequest;

class CityController extends Controller
{
  /**
   * Get all villages of a city.
   *
   * @return array
   */
  public function getVillages(CityRequest $request)
  {
    $city = City::where('id', $request->city_id)->first();
    $villages = Village::where('city_siruta', '=', $city->siruta)->orderBy('name')->get();
    return response()->json($villages);
  }
}
