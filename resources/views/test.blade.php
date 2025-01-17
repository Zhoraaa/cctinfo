@extends('layout')

@section('title')
    Тест
@endsection

@section('body')
<div class="logo-hover-interact" data-bs-toggle="offcanvas" href="#manualTOC" role="button" aria-controls="manualTOC">
    <div class="layout-img-1">
        <img src="{{ asset('assets/img/interact/icon_layout_1.png') }}" alt="" class="">
    </div>
    <div class="layout-img-2">
        <img src="{{ asset('assets/img/interact/icon_layout_2.png') }}" alt="" class="">
    </div>
    <div class="layout-img-under">
        <img src="{{ asset('assets/img/icon16.png') }}" alt="" class="">
    </div>
</div>
@endsection
