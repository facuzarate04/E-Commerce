<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\Localidad;
use App\Models\LocalType;
use Livewire\Component;

class CrearLocal extends Component
{
    public function render()
    {
        $localtypes = LocalType::all();
        $localidades = Localidad::all();
        return view('livewire.vendedor.crear-local',compact('localtypes','localidades'));
    }
}
