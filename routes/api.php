<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth', 'namespace' => 'Api'], function () {
  Route::post('county/cities', 'CityController@index');
  Route::post('person', 'PersonController@store');
  Route::post('company', 'CompanyController@store');
  Route::post('mark', 'MarkController@store');
  Route::post('category', 'VehicleCategoryController@store');
});
