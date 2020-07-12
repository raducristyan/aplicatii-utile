<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Destroy extends Component
{
    public $url;

    public $ask;

    public $text;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $ask, $text = null)
    {
        $this->url = $url;
        $this->ask = $ask;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components..button.destroy');
    }
}
