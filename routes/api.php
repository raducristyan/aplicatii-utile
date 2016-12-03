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

Route::group(['middleware' => 'auth', 'namespace' => 'Api', 'as' => 'api.'], function () {
  Route::post('county/cities', ['as' => 'county.cities', 'uses' => 'CityController@index']);
  Route::post('person', ['as' => 'person', 'uses' => 'PersonController@store']);
  Route::post('company', ['as' => 'company', 'uses' => 'CompanyController@store']);
  Route::post('mark', ['as' => 'mark', 'uses' => 'MarkController@store']);
  Route::post('category', ['as' => 'category', 'uses' => 'VehicleCategoryController@store']);
});
