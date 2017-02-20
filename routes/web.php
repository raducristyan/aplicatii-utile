<?php

Route::get('xml', function(){
    return view('xml.index');
});
Route::get('/', function(){
  if (! Auth::check()) {
      $title = config('apps.title.welcome');
      return view('welcome', compact('title'));
  }else {
      return redirect(route('dashboard'));
  }
})->name('welcome');

Route::prefix('contact')->name('contact')->group(function(){
    Route::get('/', 'ContactController@index')->name('.index');
    Route::post('/send', 'ContactController@sendMessage')->name('.send');
});

Route::get('/help', 'HelpController@index')->name('help');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/apps', 'Apps\AppsController@index')->name('apps');

Route::prefix('activate')->namespace('Auth')->group( function(){
    Route::get('/confirm/{token}', 'ActivationController@activate')->name('confirm');
    Route::get('/resend', 'ActivationController@resend')->name('resend');
});

/*-- Aplications routes --*/
Route::prefix('myapps')->name('myapps.')->namespace('Apps')->middleware('auth')->group(function(){
  Route::get('/', 'AppsController@index')->name('all');
  Route::namespace('RegistartionCertificate')->group(function (){
        Route::resource('rc', 'RegistrationController');
    });
});

/*-- Admin routes --*/
Route::name('admin.')->group(function()
{
  Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

Auth::routes();
