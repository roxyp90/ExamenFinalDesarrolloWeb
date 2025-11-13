<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{('img/logos/logoMercado.png')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    body {
        background-color: #F5F0E6;
        font-family: 'Figtree', sans-serif;
    }
    </style>

</head>

<body class="welcome-page">
    <div class="welcome-container">
        <h1 style="color: #D97A26; font-size: 2.5rem; margin-bottom: 1rem; font-weight: bold;">Bienvenido a
            {{ config('app.name') }}</h1>
        <p style="color: #4A2E14; font-size: 1.2rem; margin-bottom: 2rem;">Gracias por visitar nuestra aplicación. Para
            empezar, inicia sesión o crea una cuenta nueva.</p>
        <a href="" class="btn"
            style="background-color: #688B3E; color: white; display: inline-block; padding: 0.75rem 1.5rem; margin: 0.5rem; text-decoration: none; border-radius: 4px; font-weight: 500;">Login</a>
        <a href="" class="btn"
            style="background-color: #E8C547; color: #4A2E14; display: inline-block; padding: 0.75rem 1.5rem; margin: 0.5rem; text-decoration: none; border-radius: 4px; font-weight: 500;">Register</a>
    </div>
</body>

</html>