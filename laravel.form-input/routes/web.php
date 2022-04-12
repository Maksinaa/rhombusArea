<?php

use App\Http\Controllers\InputController;
use App\Http\Controllers\OrderController;

Route::get(
    '/',
    [InputController::class, 'index']
)->name('index');

Route::post(
    '/',
    [InputController::class, 'input']
)->name('input');

Route::get(
    '/order',
    [OrderController::class, 'show']
)->name('show');

Route::post(
    '/order',
    [OrderController::class, 'order']
)->name('order');
