@extends('layout')

@section('title')
    Расы
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/race.css') }}">
    <script src="{{ asset('assets/scripts/dynamicSearch.js') }}"></script>
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
            {{-- <i> --}}
                {{-- Последнее обновление 31.01.2024 --}}
            {{-- </i> --}}
        </div>

        <div class="border border-secondary rounded-3 overflow-hidden mb-3">
            <input type="text" class="form-control search" placeholder="Название происхождения"
                aria-label="Example text with button addon" aria-describedby="button-addon1" data-search-target="originList">
            <div class="input-group">
                <div id="originList" class="p-2 d-flex flex-wrap">
                    @foreach ($origins as $originIndex => $originName)
                        {{-- Выбор расы --}}
                        <button data-index="{{ $originIndex }}"
                            class="me-1 mb-1 btn btn-outline-primary race-selector searchable">{{ $originName }}</button>
                    @endforeach
                </div>
                <div id="originListSearchFailed" class="d-none text-secondary fst-italic mt-2">
                    <p> Ничего не найдено </p>
                </div>
            </div>
        </div>

        <div id="originTable" class="d-none">
            <h3 id="originName"></h3>
            <div id="originEvolutions" class="d-none"></div>
            <br id="evolSpace">
            <div class="mb-3 p-3 border border-secondary rounded-3 text-end">
                <span>
                    <i id="originDesc" class="origin-lore-desc"></i>
                </span>
            </div>
            <div id="originStats" class="adaptive-block m-auto row"></div>
            <hr>
            <div id="originPowers"></div>
        </div>
    </div>
@endsection
