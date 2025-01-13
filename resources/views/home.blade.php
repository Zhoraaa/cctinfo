@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title')
    Главная
@endsection

@section('body')
    <div class="absolute center">
        <div class="selector-panel d-flex flex-column">
            <div class="m-auto">
                <img src="{{ asset('assets/img/logo2k.png') }}" alt="" class="relative center title-logo m-3">
            </div>
            {{-- Навигатор по справочнику --}}
            <div class="section">
                {{-- Оглавление справочника --}}
                <div class="">
                    {{-- Правила --}}
                    <a href="{{ route('rules') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/banner_pattern.png') }}" alt=""
                                class="border border-primary">
                            <span>Правила</span>
                        </div>
                    </a>
                    {{-- Расы --}}
                    <a href="{{ route('races') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/orb_of_origin.png') }}" alt=""
                                class="border border-primary">
                            <span>Расы</span>
                        </div>
                    </a>
                    {{-- Ресурспак --}}
                    {{-- <a href="{{ route('resourcepack') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/brush.png') }}" alt=""
                                class="border border-primary">
                            <span>Ресурспак</span>
                        </div>
                    </a> --}}
                    {{-- Веб-карта --}}
                    <a href="{{ route('web-map') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/map.png') }}" alt=""
                                class="border border-primary">
                            <span>Веб-карта</span>
                        </div>
                    </a>
                    {{-- Достижения --}}
                    {{-- <a href="{{ route('advancements') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/nether_star.png') }}" alt=""
                                class="border border-primary">
                            <span>Достижения</span>
                        </div>
                    </a> --}}
                    {{-- Рецепты --}}
                    {{-- <a href="{{ route('recipes') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/knowledge_book.png') }}" alt=""
                                class="border border-primary">
                            <span>Рецепты</span>
                        </div>
                    </a> --}}
                    {{-- Лаунчер --}}
                    {{-- <a href="{{ route('download') }}"
                        class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        <div class="link-with-icon fs-4 hover-border">
                            <img class="link-icon" src="{{ asset('assets/img/badges/icon16.png') }}" alt=""
                                class="border border-primary">
                            <span>Лаунчер</span>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
