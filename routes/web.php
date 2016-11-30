<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'welcome', function(){
  if (! Auth::check()) {
      $title = config('apps.title.welcome');
      return view('welcome', compact('title'));
  }else {
      return redirect(route('dashboard'));
  }
}]);

Route::group(['prefix' => 'contact'], function(){
    Route::get('/', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
    Route::post('/send', ['as' => 'contact.send', 'uses' => 'ContactController@sendMessage']);
});

Route::get('/help', ['as' => 'help', 'uses' => 'HelpController@index']);

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::get('/apps', ['as' => 'apps', 'uses' => 'Apps\AppsController@index']);

Route::get('/activate/confirm/{$token}', ['as' => 'activate.confirm', 'uses' => 'Auth\ActivationController@activate']);
Route::get('/activate/resend', ['as' => 'activate.resend', 'uses' => 'Auth\ActivationController@resend']);

/*-- Aplications routes --*/
Route::group(['namespace' => 'Apps', 'middleware' => 'auth'], function(){
  Route::get('/myapps', ['as' => 'myapps', 'uses' => 'AppsController@index']);
  Route::group(['as' => 'myapps.', 'prefix' => 'myapps', 'namespace' => 'RegistartionCertificate'], function (){
    Route::resource('rc', 'RegistrationController');
  });
});

/*-- Admin routes --*/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function()
{
  Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
});

Auth::routes();
