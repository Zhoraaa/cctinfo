<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">CCT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" data-bs-toggle="offcanvas" href="#manualTOC" role="button"
                    aria-controls="manualTOC">Справочник</a>
                {{-- <a class="nav-link" href="{{ route('about') }}">О нас</a> --}}
                {{-- <a class="nav-link" href="{{ route('download') }}">Лаунчер</a> --}}
            </div>
        </div>
        {{-- Гостевое --}}
        @guest
        @endguest
        {{-- Для авторизованных --}}
        @auth
        @endauth
    </div>
</nav>

{{-- Всплывающий навигатор по справочнику --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="manualTOC" aria-labelledby="manualTOC">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="manualTOCtitle">Что вас интересует?</h5>
        <button class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="CLose"></button>
    </div>
    <hr>
    <div class="offcanvas-body">
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
