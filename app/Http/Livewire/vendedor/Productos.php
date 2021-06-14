<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Local;
use App\Models\Producto;
use App\Models\ProductoState;
use App\Models\ProductoType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Productos extends Component
{

    public $action;
    public $productoedit;

    

    public function edit(Producto $producto)
    {
        $this->action = 'edit';
        $this->productoedit = $producto;
    }

    public function delete(Producto $producto)
    {
        $producto->delete();
    }


    public function render()
    {

        $local = Auth::user()->local;
        $productos = $local->producto;
        $productotype = ProductoType::orderBy('name', 'ASC')->get();
        $productostate = ProductoState::orderBy('name', 'ASC')->get();
        return view('livewire.vendedor.productos', compact('productos', 'productostate', 'productotype'));
    }
}
