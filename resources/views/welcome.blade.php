<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class='text-center'>ciao da vite</h1>
        {{-- <img src="{{ Vite::asset('resources/img/491-300x200.jpg')}}" alt=""> --}}
    </body>
</html>
