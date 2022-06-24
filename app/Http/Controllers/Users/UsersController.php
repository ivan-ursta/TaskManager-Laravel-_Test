<?php

namespace App\Http\Controllers\Users;

use App\Models\UsersModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users(){
        return response()->json(UsersModel::get(), 200);
    }
    public function usersById($id){
        return response()->json(UsersModel::find($id), 200);
    }
    public function usersSave(Request $req){
        $users = UsersModel::create($req->all());
        return response()->json($users, 201);
    }
}
