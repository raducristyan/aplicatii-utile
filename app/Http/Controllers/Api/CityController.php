<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use Input;
use App\City;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
  /**
   * Get all cities of a county.
   *
   * @return array
   */
  public function index(Request $request)
  {
    $county_id = $request->county_id;
    $cities = City::where('county_siruta', '=', $county_id)->orderBy('name')->get();
    return $cities;
  }
}
