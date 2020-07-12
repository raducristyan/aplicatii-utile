<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Welcome';
    return view('welcome', compact('title'));
})->middleware('guest')->name('welcome');

/*-- Dashboard --*/
Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/activity', 'ActivityController@index');
    Route::resource('user', 'UserController')->only(['show', 'edit']);
    Route::post('user/password/change', ['as' => 'user.password.change', 'uses' => 'Auth\ChangePasswordController@changePassword']);

    /*-- Admin dashboard --*/
    Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->namespace('Admin')->group(function () {
        Route::resource('institution', 'InstitutionController')->except(['index', 'create', 'store']);
        Route::resource('user', 'UserController')->except(['show', 'edit']);
        Route::delete('user/delete/{user}', 'UserController@delete')->name('user.delete');
        Route::post('user/restore/{user}', 'UserController@restore')->name('user.restore');
    });
});


/*-- Aplications routes --*/
Route::prefix('apps')->name('apps.')->namespace('Apps')->middleware('auth')->group(function () {
    Route::get('/', 'AppsController@index');

    Route::resource('/vehicles', 'VehiclesController');

    Route::resource('county', 'CountyController');
    Route::resource('city', 'CityController');
    Route::resource('person', 'PersonController');
    Route::resource('company', 'CompanyController');
});

/*-- Activation --*/
Route::prefix('activate')->name('activate.')->namespace('Auth')->middleware('guest')->group(function () {
    Route::get('/confirm/{token}', 'ActivationController@activate')->name('confirm');
    Route::get('/resend', 'ActivationController@resend')->name('resend');
});

Auth::routes();


Route::get('test', function () {
    // dd($admin);
    // return redirect('/login')->with('flash', ['body' => 'Contul instituției nu a fost activat. Contactați administratorul contului', 'type' => 'info']);

    return view('test');
    // dd($user);
    // dd(auth()->user()->institution->with('address')->get());
})->name('test');
