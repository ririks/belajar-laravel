<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Template extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $body;
    public function __construct($body = "", $title = "Global")
    {
        $this->body = $body;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template');
    }
}
