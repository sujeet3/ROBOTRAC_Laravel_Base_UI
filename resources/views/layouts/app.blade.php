<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#7acb35">
    <meta name="description" content="@yield('description', 'ROBOTRAC — Electric, Robotic and Autonomous mobility.')">
    <title>@yield('title', 'ROBOTRAC')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <x-navbar />
    <main>@yield('content')</main>
    <x-footer />
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
