<?php

namespace App\Http\Livewire\Vendedor;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.vendedor.home',compact('user'));
    }
}
