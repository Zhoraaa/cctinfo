@extends('layout')

@section('title')
    Расы
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
        
        <textarea name="" id="findedData" cols="100" rows="10"></textarea>
        <script src="{{ asset('assets/scripts/searchRacist.js') }}"></script>

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
            {{-- Выбор расы --}}
            <button data-index="{{ $origin->index }}" class="btn btn-outline-primary race-selector">{{ $origin->name }}</button>
            @endforeach
        </div>
    @endsection
