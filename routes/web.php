<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('cookies', function () {
    return view('pages.cookies');
})->name('cookies');

Route::get('politica-de-privacidad', function () {
    return view('pages.terms');
})->name('terms');

Route::get('aviso-legal', function () {
    return view('pages.legal-warning');
})->name('legal.warning');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
