<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('orders/process/{order}', [OrderController::class, 'process'])->name('orders.process');
Route::get('orders/ship/{order}', [OrderController::class, 'ship'])->name('orders.ship');
Route::get('orders/deliver/{order}', [OrderController::class, 'deliver'])->name('orders.ship');
