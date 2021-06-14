<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class GestionarUsuarios extends Component
{
    public $user;
    public $action='home';

    public function show(User $user)
    {   
        $this->user = $user;
        $this->action = 'show';
    }

    public function render()
    {
        $users = User::all()->sortByDesc('created_at');
        return view('livewire.admin.gestionar-usuarios',compact('users'));
    }
}
