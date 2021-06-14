<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SideBarDashboard extends Component
{
    public $action;
    public function render()
    {
        return view('livewire.admin.side-bar-dashboard');
    }
}
