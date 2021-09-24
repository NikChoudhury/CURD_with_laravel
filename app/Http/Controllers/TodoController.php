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
        $request->validate([
            'name'=>'required|min:1',
        ],
        [
            'name.required' => 'This Field Is Required !!',
            
        ]);
        $res = new Todo;
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('msg',"Data Added !!");
        return redirect("your-todo");
    }

   
    public function show(Todo $todo)
    {
        return view("showTodo")->with('todoArr',Todo::orderBy('created_at', 'desc')->get());
    }

  
    public function edit(Todo $todo,$id)
    {
        $res = Todo::find($id);
        if (isset($res)) {
            return view("todoUpdate")->with('todoArr',Todo::find($id));
        }else {
            session()->flash('msg',"Data Not Found !!");
            return redirect("your-todo");
        }
    }

 
    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name'=>'required|min:1',
        ],
        [
            'name.required' => 'This Field Is Required !!',
            
        ]);
        $res = Todo::find($request->id);
        $res->name = $request->input('name');
        $res->save();
        $request->session()->flash('msg',"Tasks Updated !!");
        return redirect("your-todo");
    }


    public function destroy(Todo $todo,$id)
    {
        $res = Todo::destroy(array('id',$id));
        if ($res===1) {
            session()->flash('msg',"Tasks Deleted !!");
            return redirect("your-todo"); 
        }else{
            session()->flash('msg',"Tasks Not Found Deleted !!");
            return redirect("your-todo"); 
        }
        
    }
}
