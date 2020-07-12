<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Link extends Component
{
    /**
     * The button text.
     *
     * @var string
     */
    public $text;

    /**
     * The button url.
     *
     * @var string
     */
    public $url;

    /**
     * The button color.
     *
     * @var string
     */
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text, $url, $color = 'indigo')
    {
        $this->text = $text;
        $this->url = $url;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button.link');
    }
}
