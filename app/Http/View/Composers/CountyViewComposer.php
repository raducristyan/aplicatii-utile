<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\County;

class CountyViewComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $counties;

    /**
     * Create a new profile composer.
     *
     * @param  County  $county
     * @return void
     */
    public function __construct(County $county)
    {
        // Dependencies automatically resolved by service cont ainer...
        if (auth()->check()) {
            $this->counties = $county::all();
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
        $view->with('counties', $this->counties);
    }
}
