@extends('layout')

@section('title')
    Расы
@endsection

@section('body')
    <div class="w-75 m-auto">
        <div class="state_label d-flex flex-wrap align-items-center justify-content-between mt-2 mb-2">
            <h1>
                Происхождения персонажей
            </h1>
            <i>
                Последнее обновление 31.01.2024
            </i>
        </div>

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
                            <i>
                                {{ $origin->description }}
                            </i>
                            <hr>
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('assets/img/badges/regeneration.png') }}" alt=""
                                            class="link-icon">
                                        <span>{{ $origin->health }}</span>
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('assets/img/badges/hunger.png') }}" alt=""
                                            class="link-icon">
                                        <span>{{ $origin->food }}</span>
                                    </div>
                                </div>
                            </div>
                            @if (count($origin->powers) == 0)
                                <hr>
                                <i>Нет каких-либо особенностей</i>
                            @else
                                @foreach ($origin->powers as $power)
                                    <hr>
                                    <h6>{{ $power->name }}</h6>
                                    <p>
                                        {{ $power->description }}
                                        <br>
                                        <i class="text-secondary">{{ $power->explain }}</i>
                                    </p>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endsection
