<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'realizarLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/criar-conta', [AuthController::class, 'criarConta'])->name('criarConta');
Route::post('/criar-conta', [AuthController::class, 'criarContaCadastrar'])->name('criarContaCadastrar');

Route::get('/formularios', function () {
    return View("formularios");
})->middleware('auth');