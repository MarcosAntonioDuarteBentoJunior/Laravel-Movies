<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowCard extends Component
{
    public $show;
    public $generos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($show, $generos)
    {
        $this->show = $show;
        $this->generos = $generos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-card');
    }
}
