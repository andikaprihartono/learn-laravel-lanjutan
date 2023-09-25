<?php
namespace App\Livewire\Tasking;

use App\Models\Tasking;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule('required', message: 'Masukkan Tugas Anda')]
    public $tugas;

    #[Rule('required', message: 'Masukkan NAma Anda')]
    public $pic;

    #[Rule('required', message: 'Masukkan Tanggal')]
    public $tanggal;

    #[Rule('required', message: 'Masukkan Status')]
     public $status;

    public function store()
    {
        $this->validate();

        Tasking::create([
            'tugas'=>$this->tugas,
            'tanggal'=>$this->tanggal,
            'pic'=>$this->pic,
            'status' => $this->status,

        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('tasking.index');
    }
    public function render()
    {

       return view('livewire.tasking.create');
    }
}
