<?php

Route::get('/', function () {
    if (auth()->guest()) {
        $title = config('apps.title.welcome');
        return view('welcome', compact('title'));
    } else {
        return redirect(route('dashboard'));
    }
})->name('welcome');

Route::prefix('contact')->name('contact')->middleware('guest')->group(function () {
    Route::get('/', 'ContactController@index')->name('.index');
    Route::post('/send', 'ContactController@sendMessage')->name('.send');
});

Route::get('/help', 'HelpController@index')->name('help')->middleware('guest');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

Route::prefix('activate')->name('activate.')->namespace('Auth')->middleware('guest')->group(function () {
    Route::get('/confirm/{token}', 'ActivationController@activate')->name('confirm');
    Route::get('/resend', 'ActivationController@resend')->name('resend');
});

/*-- Aplications routes --*/
// Route::prefix('apps')->name('apps')->namespace('Apps')->middleware('auth')->group(function () {
//     Route::get('/', 'AppsController@index')->name('.all');
//     if (getAppsRoutes()) {
//         Route::name('.')->group(function () {
//             foreach (getAppsRoutes() as $key => $route) {
//                 Route::resource($route, title_case($route).'Controller');
//             };
//         });
//     };
// });

Route::prefix('apps')->name('apps')->namespace('Apps')->middleware('auth')->group(function () {
        Route::get('/', 'AppsController@index')->name('.all');
});

/*-- Admin routes --*/
Route::prefix('admin')->name('admin.')->middleware(['auth','admin'])->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('dashboard');
});

Auth::routes();

// Application admin
Route::prefix('root')->middleware('auth:root')->name('root.')->group(function () {
    Route::resource('/root', 'RootController');
});

Route::get('test', function () {
    // flash()->overlay('Modal Message', 'Modal Title');
    flash('Modal Title')->info()->important();
    return view('test');
});
