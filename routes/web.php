<?php

use App\Http\Controllers\OriginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

// Тестовые руты
Route::get('/insertedData', [TestController::class, 'insertedData'])->name('insertedData');

// Главная
Route::get('/', function () {
    return view('home');
})->name('home');

// Загрузка лаунчера
Route::get('/download', function () {
    return view('download');
})->name('download');

// О нас
Route::get('/about', function () {
    return view('about');
})->name('about');

// Админка
Route::get('/admin', function () {
    return view('admin/home');
})->name('admin');

// Cправочник
Route::get('/races', [OriginController::class, 'originsList'])->name('races'); // Расы

Route::get('/rules', function () {
    return view('rules');
})->name('rules'); // Правила

Route::get('/resourcepack', function () {
    return view('resourcepack');
})->name('resourcepack'); // Ресурспак

Route::get('/web-map', function () {
    return view('web-map');
})->name('web-map'); // Веб-карта

Route::get('/achievements', function () {
    return view('achievements');
})->name('achievements'); // Ачивки

Route::get('/recipes', function () {
    return view('recipes');
})->name('recipes'); // Рецепты