@extends('layout')
@section("title","Add New")
@section('container')
        <div class="container">
          <div class='wrapper'>
            <h1>Add Your Tasks</h1>
            <h3><a href="your-todo">Back</a></h3>
            <form action="/add_submit" method="post">
                @csrf
                <label for="" class="form-group">Task Name</label>
                <br>
                <input type="text" name="name" class="form-control" autofocus>
                <br>
                @if($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  <br>
                @endif
                <input type="submit" name="submit" value="Add Task" class="btn badge-success">
            </form>
          </div>
        </div>
@endsection