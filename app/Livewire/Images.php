<?php

namespace App\Livewire;

use Livewire\Component;

class Images extends Component
{   public $picture;
    public $name_picture;
    public $width;
    public $height;
    public function render()
    {
        return view('livewire.images');
    }
}
