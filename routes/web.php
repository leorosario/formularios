<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'realizarLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/formularios', function () {
    return View("formularios");
})->middleware('auth');