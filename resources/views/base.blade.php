<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ePOS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"> 

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
            }
            a, a:visited {
                font-weight: 300;
                color: #00A;
                text-decoration: none;
            }
            a:hover {
                color: #008;
                text-decoration: underline;
            }
            a:active {
                color: #F08;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            table th {
                background: #CCC;
            }
            table th, table td {
                border: solid 1px #CCC;
            }
            table td {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
