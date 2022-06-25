<?php

namespace App\Http\Controllers\Task;

use App\Models\TaskModel;
use App\Http\Controllers\Controller;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(){
        return response()->json(TaskModel::get(), 200);
    }

    public function taskById($id){
        return response()->json(TaskModel::find($id),200);
    }

    public function taskByStatus($status){
        $result = TaskModel::where('Exec_status', 'LIKE', '%'. $status. '%')->get();
        if(count($result)){
            return response()->json($result,200);
        }
        else {
            return response()->json(['Result' => 'No data not found'], 404);
        }
    }

    public function taskByUser($user){
        $userObj = UsersModel::where('Name', '=', $user)->get();
        if (count($userObj)){
            $userId = $userObj[0]->Id;
            $result = TaskModel::where('User_id', '=', $userId)->get();
            if(count($result)){
                return response()->json($result,200);
            }
            else {
                return response()->json(['Result' => 'No data not found'], 404);
            }
        }
    }

    public function taskSave(Request $req){
        $task = TaskModel::create($req->all());
        return response()->json($task, 201);
    }

    public function taskEdit(Request $req, TaskModel $task){
        $task->update($req->all());
        return response()->json($task, 200);
    }

    public function taskDelete(Request $req, TaskModel $task){
        $task->delete();
        return response()->json('', 204);
    }
}
