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

        // view()->composer('apps.dashboard', function ($view) {
        //     $counties = County::with('cities')->get();
        //     $view->with('counties', $counties);
        // });

        view()->composer('*', 'App\Http\View\Composers\InstitutionViewComposer');
        view()->composer('*', 'App\Http\View\Composers\CountyViewComposer');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\App\Http\View\Composers\InstitutionViewComposer::class);
        $this->app->singleton(\App\Http\View\Composers\CountyViewComposer::class);
    }
}
