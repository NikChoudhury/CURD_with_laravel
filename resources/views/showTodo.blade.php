@extends('layout')
@section("title","Todo")
@section('container')
    @parent
    <div class="container"> 
    <div class='wrapper'>
        <h1>Your Tasks</h1>
        <h3><a href="add">Add New</a></h3>
        @if(session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><p>{{session('msg')}}</p></strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <p></p>
        <form action="" method="post">
            <table class="table table-dark">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($todoArr as $todo)
                        <tr>
                            <td>{{$todo->id}}</td>
                            <td>{{$todo->name}}</td>
                            <td>{{get_formatted_date($todo->created_at)}}</td>
                            <td>
                                <a href="delete/{{$todo->id}}">Delete</a>
                                <a href="edit/{{$todo->id}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
    </div>
@endsection