<?php

namespace App\Http\Controllers\Users;

use App\Models\UsersModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user(){
        return response()->json(UsersModel::get(), 200);
    }
    public function userById($id){
        return response()->json(UsersModel::find($id), 200);
    }
    public function userSave(Request $req){
        $user = UsersModel::create($req->all());
        return response()->json($user, 201);
    }
    public function userEdit(Request $req, UsersModel $user){
        $user->update($req->all());
        return response()->json($user, 200);
    }
    public function userDelete(Request $req, UsersModel $user){
        $user->delete();
        return response()->json('', 204);
    }
}
