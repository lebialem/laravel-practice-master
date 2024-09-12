<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') . config('app.description') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('resources\css') }}" rel="stlyesheet" type="text/">

    <!-- Styles -->
    <link href="{{ asset('/css/main1.css') }}" rel="stylesheet">
</head>

<body>

    {{ $slot }}

    <footer class="footer">
        {{-- Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) --}}
        {{ __('Copyright 2024 Pizza House') }}
    </footer>
</body>

</html>
