<?php

namespace App\Livewire\Tasking;

use App\Models\Tasking;
use Livewire\Component;

class Index extends Component
{
    public function destroy($id)
    {
        Tasking::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus.');
        return redirect()->route('tasking.index');
    }
    public function render()
    {
        return view('livewire.tasking.index',[
            'taskings' => Tasking::orderBy('created_at', 'desc')->get()
        ]);
    }
}
