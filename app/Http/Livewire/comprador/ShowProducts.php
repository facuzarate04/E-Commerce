<?php

namespace App\Http\Livewire\comprador;

use App\Models\LocalType;
use App\Models\Producto;
use App\Models\ProductoState;
use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;
    public $local;
    public  $cantidad;

    public function render()
    {
        $productostate = ProductoState::where('name', 'Visible')->first();
        $productos = $this->local->producto()->where('producto_state_id', $productostate->id)->paginate(10);

        return view('livewire.comprador.show-products', compact('productos'));
    }

    public function addItem(Producto $producto)
    {
        if (Cart::content()->count() == 0) { //Agrego un item de cualquier local
            Cart::add([
                'id' => $producto->id,
                'name' => $producto->name,
                'qty' => 1,
                'price' => $producto->precio,
                'weight' => 0,
                'options' => [
                    'url' => $producto->url, 'descripcion' => $producto->descripcion,
                    'local' => $producto->local->name
                ]
            ]);
            $this->emit('itemAdded');
        } else {
            foreach (Cart::content() as $item) {
                if ($producto->local->name == $item->options->local) { //Verifico que el proximo item a agregar pertenezca al mismo local
                    Cart::add([
                        'id' => $producto->id,
                        'name' => $producto->name,
                        'qty' => 1,
                        'price' => $producto->precio,
                        'weight' => 0,
                        'options' => [
                            'url' => $producto->url, 'descripcion' => $producto->descripcion,
                            'local' => $producto->local->name
                        ]
                    ]);
                    $this->emit('itemAdded');
                }
            }
        }
    }





}
