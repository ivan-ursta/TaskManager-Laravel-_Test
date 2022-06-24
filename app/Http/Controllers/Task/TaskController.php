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
    public function taskById($id){
        return response()->json(TaskModel::find($id),200);
    }
    public function taskSave(Request $req){
        $task = TaskModel::create($req->all());
        return response()->json($task, 201);
    }
}
