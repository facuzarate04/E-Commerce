<?php

namespace App\View\Components\comprador;

use Illuminate\View\Component;

class PedidoPlantilla extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pedido;
    public function __construct($pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comprador.pedido-plantilla');
    }
}
