<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/buscar-formulario/{id}', [FormularioController::class, 'buscarFormulario']);
Route::get('/buscar-paginas/{id_formulario}', [FormularioController::class, 'buscarPaginas']);
Route::post('/cadastrar-pagina', [FormularioController::class, 'cadastrarPagina']);