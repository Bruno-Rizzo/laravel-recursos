<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;

// ======================= ROTAS DE LOGIN =================================
Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'login']);
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');


Route::middleware('check')->group(function () {

    // ======================= ROTA HOME ================================
    Route::get('/', [HomeController::class , 'index'])->name('home');

    // ================================== ROTAS DE USUÁRIO ==============================================
    Route::resource('usuarios', UsuarioController::class);
    Route::get('/usuario/confirm/{id}', [UsuarioController::class , 'confirm'])->name('usuario.confirm');
    Route::get('/usuario/delete/{id}', [UsuarioController::class , 'delete'])->name('usuario.delete');
    Route::get('/usuario/perfil', [UsuarioController::class , 'perfil'])->name('usuario.perfil');
    Route::post('/usuario/perfil', [UsuarioController::class , 'update_perfil']);

    // ================================== ROTAS DE FUNCIONÁRIO =============================================
    Route::resource('funcionarios', FuncionarioController::class);

    // ===================================== ROTAS DE PDFS =================================================
   Route::get('/pdfs', [PDFController::class , 'index'])->name('pdfs');
    Route::get('/pdf/usuarios', [PDFController::class , 'lista_todos_usuarios'])->name('lista_todos_usuarios');

});

