@extends('admin/layout')

@section('title')
    Админ-панель
@endsection

@section('body')
    <x-header></x-header>
    <form action="{{ route('insertedData') }}" method="get">
        @csrf
        <textarea name="content" class="TinyMCE"></textarea>
        <button class="btn btn-primary">
            Сохранить
        </button>
    </form>
@endsection
