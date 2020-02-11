<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arcadia - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #4bbdab;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #22b5fb;
            }

            .float-right{
                float:right;
            }

            .lists {
                color: #22b5fb;
                font-size: 20px;
                font-weight: 525;
            }

            @yield('style')
        </style>
    </head>
    <body>
        <ul class="lists">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/') }}">News</a></li>
            <li><a href="{{ url('/') }}">Contact</a></li>
            <li class="float-right"><a href="{{ url('/') }}">About</a></li>
        </ul>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
