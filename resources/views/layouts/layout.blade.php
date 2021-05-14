<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body class="bg-white h-full">
        <div class="bg-green-400 text-white py-4 px-3 text-center text-2xl font-semibold">
            GAMENET
        </div>
        @yield('content')
    </body>
</html>