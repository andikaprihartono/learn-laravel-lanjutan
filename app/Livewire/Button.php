<?php

namespace App\Livewire;
use Livewire\Component;

class Button extends Component
{
    public $name;
    public $destination;
    public function handleClick()
    {

    }
    public function render()
    {
        return view('livewire.button');
    }
}
