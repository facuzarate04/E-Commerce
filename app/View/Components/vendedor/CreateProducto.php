<?php

namespace App\View\Components\vendedor;

use Illuminate\View\Component;

class CreateProducto extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productostate,$productotype;
    
    public function __construct($productostate,$productotype)
    {
        $this->productostate = $productostate;
        $this->productotype = $productotype;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vendedor.create-producto');
    }
}
