<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add New</title>

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
            <h3><a href="your-todo">Back</a></h3>
            <form action="/add_submit" method="post">
                @csrf
                <label for="">Name</label>
                <br>
                <input type="text" name="name">
                <br>
                <input type="submit" name="Submit">
            </form>
          </div>
        </div>
    </body>
</html>
