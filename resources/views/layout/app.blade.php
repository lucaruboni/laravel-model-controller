<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Films </title>


    <!-- Styles -->
    @vite('resources/js/app.js')
    <style>
       .my_card_img{
        height: 500px
       } 
    </style>

</head>

<body>


@include('partials.header')
    <main class="bg-light">
        @yield('content')
    </main>
@include('partials.footer')
</body>

</html>