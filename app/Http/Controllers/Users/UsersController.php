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
}
