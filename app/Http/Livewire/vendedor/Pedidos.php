<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Local;
use App\Models\Pedido;
use App\Models\PedidoState;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Pedidos extends Component
{
    public $show,$pedidoedit;
    public $pedidostate;


    public function show(Pedido $pedido)
    {
        $this->show = 1;
        $this->pedidoedit = $pedido;
    }

    public function render()
    {
        $pedidostates = PedidoState::all();
        $local = Auth::user()->local;
        $query = $local->pedido->sortBy('pedido_state_id');

        $pedidos = $query;       
        
        return view('livewire.vendedor.pedidos', compact('pedidos','pedidostates'));
    }
}
