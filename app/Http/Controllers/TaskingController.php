<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasking;

class TaskingController extends Controller
{
    public $tasking;
    public function index(){
        $data_tasking = Tasking::all();
        return view('index',compact('data_tasking'));
    }

    public function create(){
        return view('livewire.form-create');
    }



}
