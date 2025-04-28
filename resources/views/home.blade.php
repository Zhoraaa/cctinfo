@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title')
    Главная
@endsection

@section('body')
    {{-- Постеры сезона --}}
    <div id="poster-block">
        <div class="poster-block">
            <div class="poster-wrapper">
                <img class="poster w-100" src="{{ asset('assets/img/background.png') }}" alt="">
            </div>
        </div>
        {{-- Логотип сезона --}}
        <div class="title-logo-wrapper">
            <img src="{{ asset('assets/img/logo2k.png') }}" alt="" class="title-logo">
        </div>
    </div>
    <div class="shadow"></div>
    {{-- Промо сезона --}}
    <div id="seasonDescription" class="teaser-text m-auto w-75 adaptive-block text-center">
        <h3>
            Эксперименты начинаются сегодня!
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magnam aliquam quaerat voluptatem. Ut enim aeque doleamus animo, cum corpore dolemus, fieri tamen permagna
            accessio potest, si aliquod aeternum et infinitum impendere malum nobis opinemur. Quod idem licet transferre in
            voluptatem, ut postea variari voluptas distinguique possit, augeri amplificarique non possit. At etiam Athenis,
            ut e patre.
        </p>
    </div>
    {{-- Концепция сервера --}}
    <div id="serverDescription" class="m-auto w-75 adaptive-block text-center">
        <h3>
            Добро пожаловать в ваш мир!
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magnam aliquam quaerat voluptatem. Ut enim aeque doleamus animo, cum corpore dolemus, fieri tamen permagna
            accessio potest, si aliquod aeternum et infinitum impendere malum nobis opinemur. Quod idem licet transferre in
            voluptatem, ut postea variari voluptas distinguique possit, augeri amplificarique non possit. At etiam Athenis,
            ut e patre audiebam facete et urbane Stoicos irridente, statua est in quo a nobis philosophia defensa et.
        </p>
    </div>
    {{-- Доска почёта --}}
    <div id="ourStars" class="m-auto w-75 adaptive-block text-center">
        <h3>
            Наши звёздочки
        </h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magnam aliquam quaerat voluptatem. Ut enim aeque doleamus animo, cum corpore dolemus, fieri.
        </p>
    </div>
    {{-- Наша команда --}}
    <div id="weAre" class="m-auto w-75 adaptive-block text-center">
        <h3>
            Команда разработки
        </h3>
        <p>

            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magnam aliquam quaerat voluptatem. Ut enim aeque doleamus animo, cum corpore dolemus, fieri.
        </p>
    </div>
@endsection
