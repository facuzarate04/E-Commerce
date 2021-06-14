<?php

namespace App\Http\Livewire\Vendedor;

use App\Models\LocalType;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdministrarMiLocal extends Component
{   

    public $action;

    public function render()
    {
        $local = Auth::user()->local;
        $localtypes = LocalType::all();
        return view('livewire.vendedor.administrar-mi-local',compact('local','localtypes'));
    }
}
