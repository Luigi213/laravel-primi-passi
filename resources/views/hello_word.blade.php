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

            ul{
                list-style: none;
                display: flex;
                justify-content: center;
            }

            li{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        <header>
            <ul>
                <li><em>Hello word</em></li>
                <li><a href="{{ route('contacts') }}">contact</a></li>
            </ul>
        </header>
    </body>
</html>
