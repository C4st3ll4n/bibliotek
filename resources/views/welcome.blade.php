<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfólio II - Projeto Integrado</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bibliotek
                </div>

                <div class="links">
                    <a href={{url('acervo')}}>Acervo</a>
                    <a href={{url('editora')}}>Editora</a>
                    <br>
                    <br>
                    <hr>
                    <a>Pedro Henrique de Souza</a>
                    <br>
                    <br>
                    <a href="https://www.linkedin.com/in/p3dr0h3nr1qu3/">LinkedIn</a>
                    <a href="https://github.com/C4st3ll4n">Github</a>
                    <a href="https://gitlab.com/h3nr1qu3">Gitlab</a>
                    <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8466943J0&tokenCaptchar=
                    03AGdBq27FzowJ-YVh1m-RxgQ1PLIXM4aM5sxK4g8Tqo52BHmaRFLb008_AIPkt6UXCN4VNj_n4P8RR4ve3ByRvEZHUXV1beY7
                    hwzGCq86-CVzXhS6Hnps6ScnipPy_PjojCQK6GSgbK5c-OTdJuHLD4kfh3o5l5Z0s3eh5fgOMMTb4s7IVEn3EQ4W7lEcQ5gfQ36
                    S2lk4GSzIVfcAn0xgzgOX49gSRYDHExLmMm82mR8EBBUNFg2ugibhW2Qv0iE49CwZfGlZtcFfC6DnmflnJuTR2zVIMl6IWbFaLJn
                    It59qxb0tD9Y3JSXMI0PJmtQYocEQ_NBWFilea0IxKo5QTWcX3HhbKXi_TFin0bxNQ12fVaRDyJjX5fol2hLxTmUP5OSAXdG_Yx
                    Fwf0aHa5ADwtycq8TRJyr9XM9PdJ5KkNjr9wKWIpxBxmHqW0VS4gwitLZwJbyWgE33bel1hto1iUvRQsSmW1dR6w">Lattes</a>
                </div>
            </div>
        </div>
    </body>
</html>
