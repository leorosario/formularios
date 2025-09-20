<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'realizarLogin']);
Route::get('/criar-conta', [AuthController::class, 'criarConta'])->name('criarConta');
Route::post('/criar-conta', [AuthController::class, 'criarContaCadastrar'])->name('criarContaCadastrar');


// Rotas Usuário logado
Route::get('/', [MainController::class, 'Home'])->name('formularios')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/cadastrar-formulario', [FormularioController::class, 'cadastrarFormulario'])->name('cadastrarFormulario')->middleware('auth');
Route::get('/editar-formulario/{id}', [FormularioController::class, 'editarFormulario'])->name('editarFormulario')->middleware('auth');
Route::post('/editar-formulario', [FormularioController::class, 'editarFormularioBanco'])->name('editarFormularioBanco')->middleware('auth');
Route::post('/deletar-formulario', [FormularioController::class, 'deletarFormulario'])->name('deletarFormulario')->middleware('auth');
Route::get('/montar-formulario/{id}', [FormularioController::class, 'montarFormulario'])->name('montarFormulario')->middleware('auth');