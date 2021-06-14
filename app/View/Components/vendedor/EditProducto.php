<?php

namespace App\View\Components\vendedor;

use Illuminate\View\Component;

class EditProducto extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $productoedit,$productostate,$productotype;
    
    public function __construct($productoedit,$productostate,$productotype)
    {
        $this->productoedit = $productoedit;
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
        return view('components.vendedor.edit-producto');
    }
}
