<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskingController;
use App\Models\Tasking;
use App\Livewire\FormCreate;
// use App\Livewire\Tasking;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',  [TaskingController::class,'index']);
// Route::get('/tasking/create', [TaskingController::class,'create']);
// Route::get('/tasking/create', FormCreate::class);
// Route::get('/tasking/create', FormCreate::class);
// Route::livewire('/tasking/create', 'form-create');
// Route::post('/tasking',[TaskingController::class,'store']);

Route::get('/', App\Livewire\Tasking\index::class)->name('tasking.index');
Route::get('/create', App\Livewire\Tasking\Create::class)->name('tasking.create');
Route::get('/edit/{id}', App\Livewire\Tasking\Edit::class)->name('tasking.edit');
