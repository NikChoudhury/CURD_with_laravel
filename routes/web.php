<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class, 'show']);

#Show Todo List
Route::get('/your-todo', [TodoController::class, 'show']);

#Delete Todo List
Route::get('/delete/{id}', [TodoController::class, 'destroy']);

#Add New
Route::get('/add', [TodoController::class, 'create']);

#Add Submit
Route::post('add_submit', [TodoController::class, 'store']);

#Edit
Route::get('/edit/{id}', [TodoController::class, 'edit']);

#Todo Update
Route::post('todo_update/{id}', [TodoController::class, 'update']);