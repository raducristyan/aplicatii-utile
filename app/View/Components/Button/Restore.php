<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Restore extends Component
{
    public $url;

    public $ask;

    public $text;

    public $method;

    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $ask, $text = null, $method = "POST", $color = 'indigo')
    {
        $this->url = $url;
        $this->ask = $ask;
        $this->text = $text;
        $this->method = $method;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..button.restore');
    }
}
