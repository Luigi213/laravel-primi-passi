<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            header{
                width: 80%;
                margin: 20px auto;
            }

            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>ciao {{ $name }}</h1>
        </header>
    </body>
</html>
