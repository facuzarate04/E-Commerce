<?php

namespace App\Http\Livewire\Comprador;

use App\Models\Pedido;
use App\Models\PedidoState;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MisPedidos extends Component
{
    public $pedidoestado;

    public function limpiar()
    {
        $this->reset('pedidoestado');
        return redirect()->back();
    }


    public function render()
    {
        $pedidostates = PedidoState::all();
        $query = Auth::user()->pedido->sortByDesc('updated_at');

        if ($this->pedidoestado) {
            $idp = PedidoState::where('name', $this->pedidoestado)->first();
            $query =  $query->where('pedido_state_id', $idp->id);
        }

        $pedidos = $query;

        return view('livewire.comprador.mis-pedidos', compact('pedidos', 'pedidostates'));
    }
}
