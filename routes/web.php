<?php

use App\Institution;

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
});


/*-- Admin dashboard --*/
Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

// Route::post('cities', 'CountyController@getCities');

Auth::routes();

// Route::get('test', function () {
//     // dd($admin = Institution::first());
//     dd(Institution::where('id', auth()->user()->institution()->first()->id)->first()->users()->get());
//     // dd($admin->administrator());
//     // flash()->overlay('Modal Message', 'Modal Title');
//     // flash('Modal Title')->info()->important();
//     // return view('test');
// });
