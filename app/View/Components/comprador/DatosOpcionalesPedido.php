<?php

namespace App\View\Components\comprador;

use Illuminate\View\Component;

class DatosOpcionalesPedido extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $localidades;
    public function __construct($localidades)
    {
        $this->localidades = $localidades;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comprador.datos-opcionales-pedido');
    }
}
