<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table = "Task";

    protected $fillable = [
        'Id',
        'Name',
        'Description',
        'Exec_status',
        'User_id',
        'created_at',
        'updated_at'
    ];
}
