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
Route::get('taskStatus/{status}', 'App\Http\Controllers\Task\TaskController@taskByStatus');
Route::get('taskUser/{user}', 'App\Http\Controllers\Task\TaskController@taskByUser');
Route::post('task', 'App\Http\Controllers\Task\TaskController@taskSave');
Route::put('task/{task}', 'App\Http\Controllers\Task\TaskController@taskEdit');
Route::delete('task/{task}', 'App\Http\Controllers\Task\TaskController@taskDelete');

Route::get('user', 'App\Http\Controllers\Users\UsersController@user');
Route::get('user/{id}', 'App\Http\Controllers\Users\UsersController@userById');
Route::post('user', 'App\Http\Controllers\Users\UsersController@userSave');
Route::put('user/{user}', 'App\Http\Controllers\Users\UsersController@userEdit');
Route::delete('user/{user}', 'App\Http\Controllers\Users\UsersController@userDelete');






