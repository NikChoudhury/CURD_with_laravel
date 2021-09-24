@extends('layout')
@section("title","Edit Todo")
@section('container')
        <div class="container">
          <div class='wrapper'>
            <h1>Your Todo</h1>
            <h3><a href="/your-todo">Back</a></h3>
            <form action="/todo_update/{{$todoArr->id}}" method="post">
                @csrf
                <label for="" class="form-group">Name</label>
                <br>
                <input type="text" name="name" value="{{$todoArr->name}}" class="form-control" autofocus="autofocus" onfocus="this.setSelectionRange(this.value.length,this.value.length)">
                <br>
                @if($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  <br>
                @endif
                <input type="submit" name="submit" value="Edit Task" class="btn badge-success">
            </form>
          </div>
        </div>
@endsection