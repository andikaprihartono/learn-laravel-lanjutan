<?php

namespace App\Livewire;

use Livewire\Component;

class TaskingTable extends Component
{
    public $tasking;

    public function render()
    {
        return view('livewire.tasking-table');


    }
}
