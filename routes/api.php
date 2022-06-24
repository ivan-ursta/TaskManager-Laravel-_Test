<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('task', 'App\Http\Controllers\Task\TaskController@task');
Route::get('task/{id}', 'App\Http\Controllers\Task\TaskController@taskById');
Route::post('task', 'App\Http\Controllers\Task\TaskController@taskSave');

Route::get('users', 'App\Http\Controllers\Users\UsersController@users');
Route::get('users/{id}', 'App\Http\Controllers\Users\UsersController@usersById');
Route::post('users', 'App\Http\Controllers\Users\UsersController@usersSave');






