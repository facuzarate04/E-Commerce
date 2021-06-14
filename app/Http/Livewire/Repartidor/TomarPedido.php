<?php

namespace App\Http\Livewire\Repartidor;

use App\Models\Pedido;
use App\Models\PedidoState;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TomarPedido extends Component
{
    
    public function tomarpedido(Pedido $pedido)
    {
        $pedido->pedidostate()->associate(PedidoState::find(4)->first());
        $pedido->save();
    }

    public function render()
    {

        $pedidos = Pedido::where('pedido_state_id',1 )
        ->whereHas('Local', function($q){
            $q->where('localidad_id',Auth::user()->localidad->id );})
        ->paginate(10);
        $pedidostates = PedidoState::all();
        return view('livewire.repartidor.tomar-pedido',compact('pedidos','pedidostates'));
    }
}
