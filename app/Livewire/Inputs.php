<?php

namespace App\Livewire;

use Livewire\Component;

class Inputs extends Component
{
    public $label;
    public $tugas;
    public $type;
    public $placeholder;
    public $wiremodel;
    public function render()
    {
        return view('livewire.inputs');
    }
}
