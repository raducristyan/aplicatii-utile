<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Title extends Component
{
    /**
     * The section text.
     *
     * @var string
     */
    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.section.title');
    }
}
