<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasking extends Model
{
    // use HasFactory;
    protected $table ='table_tasking';
    protected $fillable = [
        'tugas','tanggal','pic','status'
    ];
}

