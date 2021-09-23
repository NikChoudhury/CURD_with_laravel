<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
          <div class='wrapper'>
            <h1>Your Todo</h1>
            <h3><a href="add">Add New</a></h3>
            <p>{{session('msg')}}</p>
            <form action="" method="post">
                <table>
                    <thead>
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
                                <td>{{$todo->created_at}}</td>
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
    </body>
</html>
