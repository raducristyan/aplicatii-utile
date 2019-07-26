<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Institution;

class InstitutionViewComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $institution;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $institution
     * @return void
     */
    public function __construct(Institution $institution)
    {
        // Dependencies automatically resolved by service cont ainer...
        if (auth()->check()) {
            $this->institution = $institution->where('id', auth()->user()->institution()->first()->id)->with(['users', 'address.village.city.county', 'admin.address.village.city.county'])->first();
        }
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('institution', $this->institution);
    }
}
