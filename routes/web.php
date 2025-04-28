<?php

use App\Http\Controllers\OriginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

// Тестовые руты
Route::get('/insertedData', [TestController::class, 'insertedData'])->name('insertedData');
Route::get('/test', function () {
    return view('test');
})->name('test');

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

Route::get('/prohodka', function () {
    return redirect()->away('https://boosty.to/cacuti');
})->name('prohodka'); // Проходка

// Cправочник
Route::get('/races', [OriginController::class, 'originsList'])->name('races'); // Расы
Route::get('/racesAPI', [OriginController::class, 'originsListAPI'])->name('racesAPI'); // Расы эндпоинт

Route::get('/rules', function () {
    return view('rules');
})->name('rules'); // Правила

Route::get('/resourcepack', function () {
    return view('resourcepack');
})->name('resourcepack'); // Ресурспак

Route::get('/web-map', function () {
    return redirect()->away('http://107.161.154.204:8123/');
    // return view('web-map');
})->name('web-map'); // Веб-карта

Route::get('/advancements', function () {
    return view('advancements');
})->name('advancements'); // Ачивки

Route::get('/recipes', function () {
    return view('recipes');
})->name('recipes'); // Рецепты