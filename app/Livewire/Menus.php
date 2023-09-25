<?php

namespace App\Livewire;

use Livewire\Component;

class Menus extends Component
{
    public $menu;
    public $destination;
    public function render()
    {
        return view('livewire.menus');
    }
}
