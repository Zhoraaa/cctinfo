<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/download', function () {
    return view('download');
})->name('download');
Route::get('/play', function () {
    return view('play');
})->name('play');
