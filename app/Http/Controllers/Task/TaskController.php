<?php

namespace App\Http\Controllers\Task;

use App\Models\TaskModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
        return response()->json(TaskModel::get(), 200);
    }
}
