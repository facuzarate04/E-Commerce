<?php

namespace App\View\Components\vendedor;

use Illuminate\View\Component;

class CrearLocal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $localtypes;

    public function __construct($localtypes)
    {
        $this->localtypes = $localtypes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        return view('components.vendedor.crear-local');
    }
}
