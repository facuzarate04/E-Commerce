<?php

namespace App\Http\Livewire\Admin;

use App\Models\Local;
use App\Models\LocalState;
use Livewire\Component;

class GestionarLocales extends Component
{
    public $local;
    public $action='home';


    public function show(Local $local)
    {   
        $this->local = $local;
        $this->action = 'show';
    }

    public function delete(Local $local)
    {
        
    }

    public function render()
    {
        $locals = Local::all()->sortByDesc('created_at');
        $localstates = LocalState::all();
        return view('livewire.admin.gestionar-locales',compact('locals','localstates'));
    }
}
