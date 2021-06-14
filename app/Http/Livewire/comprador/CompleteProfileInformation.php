<?php

namespace App\Http\Livewire\comprador;

use App\Models\Localidad;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompleteProfileInformation extends Component
{   

    public function render()
    {   
        $user = Auth::user();
        $localidades = Localidad::all();
        return view('livewire.comprador.complete-profile-information',compact('localidades','user'));
    }
   
}
