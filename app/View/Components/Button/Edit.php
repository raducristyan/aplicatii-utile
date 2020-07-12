<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Edit extends Component
{
    public $url;

    public $text;

    public $method;

    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $text = null, $method = "POST", $color = 'indigo')
    {
        $this->url = $url;
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
        return view('components..button.edit');
    }
}
