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
      return redirect('/home');
  }
}]);


Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@index']);
Route::post('/contact', 'ContactController@sendMessage');

Route::get('/help', ['as' => 'help', 'uses' => 'HelpController@index']);

Route::auth();

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/apps', ['as' => 'apps', 'uses' => 'Apps\AppsController@index']);

/*-- Aplications routes --*/
Route::group(['namespace' => 'Apps', 'middleware' => 'auth'], function(){
  Route::get('/myapps', ['as' => 'myapps', 'uses' => 'AppsController@index']);
  Route::group(['prefix' => 'myapps', 'namespace' => 'RegistartionCertificate'], function (){
    Route::resource('rc', 'RegistrationController');
  });
});

/*-- Admin routes --*/
Route::group(['prefix' => 'admin'], function()
{
  Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
