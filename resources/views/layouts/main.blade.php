<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        {{-- <link rel="stylesheet" href="{{mix('/css/styles.css')}}"> --}}
    </head>
    <body>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <div class="pages">
            <div>
                @yield('header')
            </div>
            @yield('content')
        </div>
    </body>
</html>