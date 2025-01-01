<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-connections></x-connections>
    <title>@yield('title')</title>
</head>

<body data-bs-theme="dark">

    <x-header></x-header>

    @yield('body')

    <x-scripts></x-scripts>

</body>

</html>
