<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Arcadia - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                overflow: hidden;
                text-align: center;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                width: 100vw;
                margin: 0;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #000000;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: #4bbdab;
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
                font-weight: 500;
            }

            @yield('style')
        </style>
    </head>
    <body>
        <ul class="lists">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/') }}">Créations</a></li>
            <li><a href="{{ url('/contact') }}">Commande</a></li>
            <li class="float-right"><a href="{{ url('/') }}">A propos</a></li>
        </ul>

        <div class="container">
            @yield('content')
        </div>
        <script type="text/javascript">
            $('a[href^="#"]').click(function(){
                var the_id = $(this).attr("href");
                if (the_id === '#') {
                    return;
                }
                $('html, body').animate({
                    scrollTop:$(the_id).offset().top
                }, 'slow');
                return false;
            });
        </script>
    </body>
</html>
