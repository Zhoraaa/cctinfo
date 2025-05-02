@extends('layout')

@section('title')
    Расы
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/race.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/scripts/searchRace.js') }}"></script>
@endsection

@section('body')
    <div class="auto-width m-auto">
        <div class="state_label d-flex flex-wrap align-items-center justify-content-between">
            <h1>
                Происхождения персонажей
            </h1>
            <i>
                Последнее обновление 31.01.2024
            </i>
        </div>

        <div>
            @foreach ($origins as $origin)
                {{-- Выбор расы --}}
                <button data-index="{{ $origin->index }}"
                    class="me-1 mb-2 btn btn-outline-primary race-selector">{{ $origin->name }}</button>
            @endforeach
        </div>

        <div id="originTable" class="d-none">
            <h3 id="originName"></h3>
            <div id="originEvolutions"></div>
            <br>
            <div class="p-3 border border-secondary rounded-3 text-end">
                <span>
                    <i id="originDesc" class="origin-lore-desc"></i>
                </span>
            </div>
            <br>
            <hr>
            <div id="originPowers"></div>
        </div>
    </div>
@endsection
