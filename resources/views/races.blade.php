@extends('layout')

@section('title')
    Расы
@endsection

@section('body')
    <x-header></x-header>
    <div class="auto-width m-auto">
        <div class="state_label d-flex flex-wrap align-items-center justify-content-between mt-2 mb-2">
            <h1>
                Происхождения персонажей
            </h1>
            <i>
                Последнее обновление 31.01.2024
            </i>
        </div>

        <p>
            Это - конечный список рас (происхождений) персонажей для ССТ 2.5. Возможны правки в будущем для большей ясности
            способностей и бэкраунда каждой расы.
        </p>
        <p>
            Персонаж не обязательно должен полностью соответствовать описанию расы. Если на способности какой-то расы хорошо
            ложится ваша задумка персонажа - можете использовать её. Даже несмотря на несоответствие "канону".
        </p>

        <div class="accordion" id="accordionRaces">

            @foreach ($origins as $origin)
                {{-- Раса --}}
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#race{{ $origin->index }}" aria-expanded="false"
                            aria-controls="race{{ $origin->index }}">
                            {{ $origin->name }}
                        </button>
                    </h2>
                    <div id="race{{ $origin->index }}" class="accordion-collapse collapse" data-bs-parent="#accordionRaces">
                        <div class="accordion-body">
                            {{-- Описание расы --}}
                            <i>
                                {!! $origin->description !!}
                            </i>
                            <hr>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-md p-2">
                                        <img src="{{ asset('assets/img/badges/regeneration.png') }}" alt="Максимум здоровья"
                                            title="Максимум здоровья" class="link-icon">
                                        <span class="adaptive-block">{{ $origin->health }}</span>
                                    </div>
                                    <div class="col-md p-2">
                                        <img src="{{ asset('assets/img/badges/hunger.png') }}" alt="Рацион питания"
                                            title="Рацион питания" class="link-icon">
                                        <span class="adaptive-block">{{ $origin->food }}</span>
                                    </div>
                                    @if ($origin->average !== null)
                                        @php
                                            switch ($origin->average) {
                                                case 'Не стареют':
                                                    $badge = 'glowing';
                                                    $alt = 'Бессмертие';
                                                    break;
                                                default:
                                                    $badge = 'clock_00';
                                                    $alt = 'Ожидаемая продолжительность жизни';
                                                    break;
                                            }
                                        @endphp
                                        <div class="col-md p-2">
                                            <img src="{{ asset('assets/img/badges/' . $badge . '.png') }}"
                                                alt="{{ $alt }}" title="{{ $alt }}" class="link-icon">
                                            <span class="adaptive-block">{{ $origin->average }}</span>
                                        </div>
                                    @endif
                                    @if ($origin->kindness !== null)
                                        @php
                                            switch ($origin->kindness) {
                                                case 'Проявляется во взрослом возрасте':
                                                case 'Неприменимо':
                                                    $badge = 'light';
                                                    $alt = 'Нет детства или в детстве не проявляется';
                                                    break;
                                                case 'Как обычно':
                                                    $badge = 'light';
                                                    $alt = 'Взорслеют как их сородичи';
                                                    break;
                                                default:
                                                    $badge = 'jump_boost';
                                                    $alt = 'Взросление';
                                                    break;
                                            }
                                        @endphp
                                        <div class="col-md p-2">
                                            <img src="{{ asset('assets/img/badges/' . $badge . '.png') }}"
                                                alt="{{ $alt }}" title="{{ $alt }}" class="link-icon">
                                            <span class="adaptive-block">{{ $origin->kindness }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- Способности --}}
                            @if (count($origin->powers) == 0)
                                <hr>
                                <i>Нет каких-либо особенностей</i>
                            @else
                                @foreach ($origin->powers as $power)
                                    <hr>
                                    <h6 class="text-info">{{ $power->name }}</h6>
                                    <p>
                                        {{ $power->description }}
                                        <br>
                                        <i class="text-secondary">{{ $power->explain }}</i>
                                    </p>
                                @endforeach
                            @endif
                            {{-- Эволюция --}}
                            @if (count($origin->evolutions) > 0)
                                <hr>
                                <h4 class="text-info">Эволюция</h4>
                                <div class="accordion" id="evolutions{{ $origin->index }}">
                                    @foreach ($origin->evolutions as $evolution)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#evolution{{ $evolution->index }}"
                                                    aria-expanded="false" aria-controls="evolution{{ $evolution->index }}">
                                                    {{ $evolution->name }}
                                                </button>
                                            </h2>
                                            <div id="evolution{{ $evolution->index }}" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree"
                                                data-bs-parent="#evolutions{{ $origin->index }}">
                                                <div class="accordion-body">
                                                    {!! $evolution->description !!}
                                                </div>
                                                <div class="container">
                                                    {{-- Способности --}}
                                                    @if (count($evolution->powers) == 0)
                                                        <hr>
                                                        <i>Нет каких-либо особенностей</i>
                                                    @else
                                                        @foreach ($evolution->powers as $evo_power)
                                                            <hr>
                                                            <h6 class="text-info">{{ $evo_power->name }}</h6>
                                                            <p>
                                                                {{ $evo_power->description }}
                                                                <br>
                                                                <i class="text-secondary">{{ $evo_power->explain }}</i>
                                                            </p>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
