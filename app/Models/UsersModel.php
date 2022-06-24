<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    protected $table = "Users";

    const UPDATED_AT = null;

    protected $fillable = [
        'Id',
        'Name',
        'Email',
        'Passwd',
        'Role',
        'created_at'
    ];
}
