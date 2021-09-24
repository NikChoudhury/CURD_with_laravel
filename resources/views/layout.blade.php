<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Piazzolla:wght@300;400&display=swap");
        * {
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        font-family: "Piazzolla", serif;
        }
        body {
        min-height: 100vh;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        }
        footer {
        height: 5rem;
        background-color: #182c61;
        margin-top: auto;
        color: #fff;
        text-align: center;
        display:flex;
        justify-content:center;
        align-items:center;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2 class="text-center p-3">Laravel Todo App</h2>
        </div>
    </header>
    <div id="container">
        @section('container')
        
        @show
    </div>
    <footer>
        <div class="container">
        <p>Created with <span style="color: red;"> ❤ </span> <a href="https://www.facebook.com/nik.xim/"
            target="_blank">NIK</a></p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>