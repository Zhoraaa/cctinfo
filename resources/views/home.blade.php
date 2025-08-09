@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@section('title')
    Главная
@endsection

@section('body')
    {{-- Постеры сезона --}}
    <div>
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
    <div id="seasonDescription" class="teaser-text m-auto w-75 adaptive-block mb-4">
        <h3 class="text-center w-75 m-auto mt-3">
            Эксперименты начинаются сегодня!
        </h3>
        <p class="d-block w-75 adaptive-block m-auto mt-4">
            Текущий сезон (начался 25.01) ориентирован на то, чтобы мы обновили сборку и пощупали новые технологии для
            разработки сервера! Новое ядро, скриптовые языки, экспериментальные предметы и механики. Баги,
            эксплойты, уникальные и не очень идеи - всё здесь!
            <br>
            Этот сезон - поле экспериментов для теста своих сил перед
            будущим сезоном. Контент на который уже продумывается.
        </p>
    </div>
    {{-- Концепция сервера --}}
    <div id="serverDescription" class="teaser-text m-auto w-75 adaptive-block mb-4">
        <h3 class="text-center w-75 m-auto mt-3">
            Добро пожаловать в ваш мир!
        </h3>
        <p class="d-block w-75 adaptive-block m-auto mt-4">
            <b>Правило №0 нашего сервера: </b> Меняйте правила игры как вам угодно. Чем больше рола - тем больше кастомных
            механик и правил!
            За исключением баланса, ваши предложения по механикам ничем не ограничены. Вы можете предлагать конкретные
            плагины или датапаки. А можете отролить какой-нибудь сюжет и мы напишем скрипт специально под ваш рол!
        </p>
    </div>

    {{-- 
    * Аккордеон
    --}}
    <div class="w-75 m-auto adaptive-block">
        <div class="accordion w-75 m-auto adaptive-block" id="accordionExample">
            {{-- Текущее событие --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEvent">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEvent" aria-expanded="true" aria-controls="collapseEvent">
                        Текущее событие
                    </button>
                </h2>
                <div id="collapseEvent" class="accordion-collapse collapse show" aria-labelledby="headingEvent"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        После открытия пути на Луну мы обнаружили, что многие из нас заразились на ней страшной хворью!
                        Рассудок
                        заражённых медленно затуманивается, а также у них появляется жажда крови! Единственные кто не
                        подвержен
                        этой заразе - Огнерождённые. Вам предстоит разгадать секрет этого недуга и вылечить его. Но будут ли
                        согласны все?
                    </div>
                </div>
            </div>
            {{-- Как попасть на сервер? --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingStart">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseStart" aria-expanded="false" aria-controls="collapseStart">
                        Как попасть на сервер?
                    </button>
                </h2>
                <div id="collapseStart" class="accordion-collapse collapse" aria-labelledby="headingStart"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Сервер доступен всем желающим по подписке на наш <a href="https://boosty.to/cacuti" target="_blank"
                            rel="noopener noreferrer">бусти</a>. Ограничений по возрасту нет, только по правилам. Привяжите
                        аккаунт дискорда к бусти и следуйте предписаниям.
                        Если что-то не получается - можете написать глав. админу в личку.
                    </div>
                </div>
            </div>
            {{-- Наша команда --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingWeAre">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWeAre" aria-expanded="false" aria-controls="collapseWeAre">
                        Наша команда
                    </button>
                </h2>
                <div id="collapseWeAre" class="accordion-collapse collapse" aria-labelledby="headingWeAre"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="d-block adaptive-block mx-auto mb-4">
                            Обращаться по вопросам касательно их деятельности вы можете в нашем дискорде, напрямую к
                            админам. Или на форуме обратной связи.
                        </div>
                        {{-- Артур --}}
                        <div class="mb-2 px-3 py-3 border border-secondary rounded">
                            <h6>
                                Артур <a target="_blank" href="t.me/zh0raaa"
                                    class="text-secondary text-decoration-none">[@zh0raaa]</a>
                            </h6>
                            <i>
                                Глав. админ, создатель проекта. Занимается написанием сайта и скриптов. А также
                                продумывает лор
                                сервера.
                                Можете обращаться в личку по любым вопросам. Предпочтительнее использовать Telegram.
                            </i>
                        </div>
                        {{-- Серёжа --}}
                        <div class="mb-2 px-3 py-3 border border-secondary rounded">
                            <h6>
                                Сергей <span class="text-secondary text-decoration-none">[@SerhiiHorban]</span>
                            </h6>
                            <i>
                                Тех. админ и девопс проекта, занимается поддержанием стабильной работы сервера и прочей перифирией. Если
                                у вас не работает команда или вы нашли какой-то баг - сообщайте ему в личку дискорда.
                            </i>
                        </div>
                        {{-- Женя --}}
                        <div class="mb-2 px-3 py-3 border border-secondary rounded">
                            <h6>
                                Женя <a target="_blank" href="t.me/ranunculus_repens"
                                    class="text-secondary text-decoration-none">[@ranunculus_repens]</a>
                            </h6>
                            <i>
                                Помощник глав. админа по обратной связи, а также ивентмейкер. Если есть какие-то
                                предложения или инициативы - спокойно можете писать ему!
                            </i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Сайт в альфе --}}
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingWeb">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWeb" aria-expanded="false" aria-controls="collapseWeb">
                        Сайт в альфе
                    </button>
                </h2>
                <div id="collapseWeb" class="accordion-collapse collapse" aria-labelledby="headingWeb"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Сайт сейчас находится на стадии разработки и дополняется в свободное время глав. админом. Однако вы
                        можете узнать
                        на нём актуальную информацию о сервере. Здесь есть ссылка на <a href="https://boosty.to/cacuti"
                            target="_blank" rel="noopener noreferrer">бусти</a>, <a href="{{ route('races') }}">описание
                            рас</a>
                        и <a href="{{ route('rules') }}">правила сервера</a>. Нажмите на
                        логотип в верхнем левом углу экрана, чтобы открыть меню
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
