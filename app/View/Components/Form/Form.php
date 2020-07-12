<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Form extends Component
{

    public $method;

    public $url;

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method = 'POST', $url, $id)
    {
        $this->method = $method;

        $this->url = $url;

        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..form.form');
    }
}
