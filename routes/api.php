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

Route::group(['middleware' => 'api', 'namespace' => 'Api', 'as' => 'api.'], function () {
    Route::post('county/cities', ['as' => 'county.cities', 'uses' => 'CountyController@getCities']);
    Route::post('city/villages', ['as' => 'city.villagexites', 'uses' => 'CityController@getVillages']);
    Route::post('person', ['as' => 'person', 'uses' => 'PersonController@store']);
    Route::post('company', ['as' => 'company', 'uses' => 'CompanyController@store']);
});
