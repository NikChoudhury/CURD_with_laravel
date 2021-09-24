<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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