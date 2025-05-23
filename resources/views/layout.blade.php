<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/icon16.png') }}" type="image/x-icon">
    <x-connections></x-connections>
    @yield('head')
    <title>@yield('title')</title>
</head>

<body data-bs-theme="dark">

    <x-header></x-header>
    
    @yield('body')

    <x-scripts></x-scripts>
    @yield('scripts')

</body>

</html>
