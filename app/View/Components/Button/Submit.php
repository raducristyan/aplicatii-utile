<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Submit extends Component
{
    public $text;

    public $color;

    public $for;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $color, $for)
    {
        $this->text = $text;
        $this->color = $color;
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..button.submit');
    }
}
