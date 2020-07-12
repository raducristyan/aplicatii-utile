<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Card extends Component
{
    public $class;

    public $title;

    public $footer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $title = false, $footer = false)
    {
        $this->class = $class;
        $this->title = $title;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..card.card');
    }
}
