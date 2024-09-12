<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizza.index');
Route::get('/pizzas/{slug}', [PizzaController::class, 'show'])->name('pizza.show');