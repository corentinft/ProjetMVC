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

            .bg-black {
                background-color: #000;
            }

            .styleLogo {
                color: #f05791 !important;
            }

            @yield('style')
        </style>
    </head>
    <body>
        <ul class="lists">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/') }}">Commande</a></li>
            <li class="float-right"><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>

        <div class="container">
            @yield('content')
        </div>

        <footer class="bg-black page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <hr class="clearfix w-100 d-md-none pb-3">

                    <div class="col-md-9 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Pages</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="{{ url('/') }}">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Commander une borne d'arcade</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">Contact</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">

                        <h5 class="text-uppercase">Réseaux sociaux</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#">FaceBook</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center py-3">
                © 2020 Copyright: Arcadia
            </div>

        </footer>
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
