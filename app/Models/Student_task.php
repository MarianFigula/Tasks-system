<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_num',
        'task_gen',
        'task_sub',
        'task_correct',
    ];
}
