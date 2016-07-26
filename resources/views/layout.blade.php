<!DOCTYPE html>
<html>
    <head>
        <!-- <meta charset="UTF-8"> -->
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

        <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

        @yield('header')
    </head>
    <body>

        @yield('content')


        @yield('footer')

    </body>
</html>
