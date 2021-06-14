<?php

namespace App\View\Components\vendedor;

use Illuminate\View\Component;

class PedidoPlantilla extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pedido,$pedidostates;
    public function __construct($pedido,$pedidostates)
    {
        $this->pedido = $pedido;
        $this->pedidostates = $pedidostates;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.vendedor.pedido-plantilla');
    }
}
