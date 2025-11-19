<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Простые заглушки с именами роутов
Route::get('/games', function () {
    return "Магазин игр - скоро будет!";
})->name('games.index'); // ← ДОБАВЬ ЭТО

Route::get('/library', function () {
    return "Библиотека - скоро будет!";
})->name('library');

Route::get('/community', function () {
    return "Сообщество - скоро будет!";
})->name('community');

Route::get('/wishlist', function () {
    return "Список желаемого - скоро будет!";
})->name('wishlist');

Route::get('/cart', function () {
    return "Корзина - скоро будет!";
})->name('cart');

Route::get('/login', function () {
    return "Вход - скоро будет!";
})->name('login');

Route::get('/register', function () {
    return "Регистрация - скоро будет!";
})->name('register');
