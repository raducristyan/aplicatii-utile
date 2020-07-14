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

    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $class = null)
    {
        $this->text = $text;
        $this->class = $class;
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
