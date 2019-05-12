<?php

namespace App\Providers;

use App\County;
use App\Institution;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('apps.dashboard', function ($view) {
            $view->with('counties', County::all());
        });

        view()->composer('apps.dashboard', function ($view) {
            $view->with('institution', Institution::where('id', auth()->user()->institution()->first()->id)->first());
        });

        view()->composer('apps.dashboard', function ($view) {
            $view->with('users', Institution::where('id', auth()->user()->institution()->first()->id)->first()->users()->get());
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
