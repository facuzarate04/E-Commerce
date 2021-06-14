<?php

namespace App\Http\Livewire\Comprador;

use App\Models\Envio;
use App\Models\Local;
use App\Models\Localidad;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetallePedido extends Component
{
    public $pedido;
    public $showopcionales;
    public $localidad, $envio; //Calculo del monto de envio dinámico

    public function showopcionales()
    {
        if ($this->showopcionales != 1) {
            $this->showopcionales = 1;
        } else {
            $this->reset(['showopcionales','localidad']);
        }
    }



    public function render()
    {
        if (Cart::content()->count()) { //Calculo del monto de envio dinámico
            foreach (Cart::content() as $local) {
            } 
            $local = Local::where('name', $local->options->local)->first();

            if ($this->localidad) {
                $origen = Localidad::find($local->localidad->id);
                $destino = Localidad::find($this->localidad);
                $envio = Envio::where('origen', $origen->id)->where('destino', $destino->id)->first();
                $this->envio = $envio->monto;
            } else {
                $origen = Localidad::find($local->localidad->id);
                $destino = Localidad::find(Auth::user()->localidad->id);
                $envio = Envio::where('origen', $origen->id)->where('destino', $destino->id)->first();
                $this->envio = $envio->monto;
            }
        }
        
        $localidades = Localidad::all();
        return view('livewire.comprador.detalle-pedido', compact('localidades'));
    }
}
