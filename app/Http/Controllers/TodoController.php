<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view("add");
    }

  
    public function store(Request $request)
    {
        $res = new Todo;
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('msg',"Data Added !!");
        return redirect("your-todo");
    }

   
    public function show(Todo $todo)
    {
        return view("showTodo")->with('todoArr',Todo::all());
    }

  
    public function edit(Todo $todo,$id)
    {
        return view("todoUpdate")->with('todoArr',Todo::find($id));
    }

 
    public function update(Request $request, Todo $todo)
    {
        $res = Todo::find($request->id);
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('msg',"Data Updated !!");
        return redirect("your-todo");
    }


    public function destroy(Todo $todo,$id)
    {
        Todo::destroy(array('id',$id));
        session()->flash('msg',"Data Deleted !!");
        return redirect("your-todo");
    }
}
