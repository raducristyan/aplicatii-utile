<?php

use App\City;
use App\User;
use App\County;
use App\Village;
use App\Institution;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $title = 'Welcome';
    return view('welcome', compact('title'));
})->middleware('guest')->name('welcome');

Route::prefix('contact')->name('contact')->middleware('guest')->group(function () {
    Route::get('/', 'ContactController@index')->name('.index');
    Route::post('/send', 'ContactController@sendMessage')->name('.send');
});

/*-- Dashboard --*/
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

/*-- Activation --*/
Route::prefix('activate')->name('activate.')->namespace('Auth')->middleware('guest')->group(function () {
    Route::get('/confirm/{token}', 'ActivationController@activate')->name('confirm');
    Route::get('/resend', 'ActivationController@resend')->name('resend');
});

/*-- Aplications routes --*/
Route::prefix('apps')->name('apps')->namespace('Apps')->middleware('auth')->group(function () {
    Route::get('/', 'AppsController@index')->name('.all');

    Route::get('/vehicles', 'VehiclesController@index')->name('.vehicles');
    Route::get('/vehicles/create', 'VehiclesController@create')->name('.vehicles.create');
    Route::get('/vehicles/store', 'VehiclesController@store')->name('.vehicles.store');

    Route::post('county/cities', ['as' => 'county.cities', 'uses' => 'CountyController@getCities']);
    Route::post('city/villages', ['as' => 'city.villages', 'uses' => 'CityController@getVillages']);
    Route::post('person', ['as' => 'person', 'uses' => 'PersonController@store']);
    Route::post('company', ['as' => 'company', 'uses' => 'CompanyController@store']);
    Route::put('user/profile', ['as' => 'user.profile', 'uses' => 'UserController@update']);
    Route::put('user/address', ['as' => 'user.address', 'uses' => 'AddressController@update']);
});



/*-- Admin dashboard --*/
Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

Route::post('user/password/change', ['as' => 'user.password', 'uses' => 'Auth\ChangePasswordController@changePassword']);



// Route::post('cities', 'CountyController@getCities');

Auth::routes();


Route::get('test', function () {
    // dd($admin = Institution::first());
    // $institution = Institution::where('id', auth()->user()->institution()->first()->id)->first();
    // $user = User::find(1);
    // dd($admin->administrator());
    // flash('Modal Message', 'Modal Title')->info();
    // flash('Modal Title')->info()->important();
    // dd($user);
    // dd(Auth::user());
});
