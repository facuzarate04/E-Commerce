<?php

namespace App\Http\Livewire\comprador;

use App\Models\Producto;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DropdownCart extends Component
{
    protected $listeners = ['itemAdded' => 'render'];


    public function removeItem($rowId){
        Cart::remove($rowId);
        $this->emitSelf('render');
    }

    public function eliminarCarrito(){
        Cart::destroy();
    }


    public function render()
    {
        return view('livewire.comprador.dropdown-cart');
    }
    
}
