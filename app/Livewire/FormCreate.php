<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Tasking;
use Livewire\Attributes\Layout;
use Carbon\Carbon;


class FormCreate extends Component
{
    // public $tugas = '';
    // public $tanggal = '';
    // public $pic = '';
    // public $status = '';
    public $tugas;
    public $pic;
    public $tanggal;
    public $status;
    // #[Layout('components.layouts.app')]
     public function save()
    {
        dd($this->all());
        $tanggal = Carbon::parse($this->tanggal);
        Tasking::create(
        //    [
        //        'tugas'=>$this->tugas,
        //        'tanggal'=>$tanggal->isoFormat('Y-M-D'),
        //        'pic'=>$this->pic,
        //        'status'=>$this->status
        //    ]

            [
                'tugas' => $this->tugas,
                'pic' => $this->pic,
                'tanggal' => $this->tanggal,
                'status' => $this->status,
            ]
        );
        $this->reset(['tugas', 'pic','tanggal','status']);

        // return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.form-create');
    }

}
