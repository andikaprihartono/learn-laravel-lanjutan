<?php

namespace App\Livewire\Tasking;

use App\Models\Tasking;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Edit extends Component
{
    public $taskingID;

    #[Rule('required', message: 'Masukkan Tugas Anda')]
    public $tugas;
    #[Rule('required', message: 'Masukkan NAma Anda')]
    public $pic;
    #[Rule('required', message: 'Masukkan Tanggal')]
    public $tanggal;
    #[Rule('required', message: 'Masukkan Status')]
     public $status;

    public function mount($id)
    {
        $tasking = Tasking::find($id);
        $this->taskingID   = $tasking->id;
        $this->tugas    = $tasking->tugas;
        $this->pic  = $tasking->pic;
        $this->tanggal    = $tasking->tanggal;
        $this->status  = $tasking->status;
    }

      public function update()
    {
        $this->validate();

        $tasking = Tasking::find($this->taskingID);

        $tasking->update([
            'tugas' => $this->tugas,
            'pic' => $this->pic,
            'tanggal' => $this->tanggal,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Data Berhasil Diupdate.');
        return redirect()->route('tasking.index');
    }
    public function render()
    {
        return view('livewire.tasking.edit');
    }
}
