<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui estão todas as rotas da aplicação SysImoveis
|
*/

// Página inicial - lista de imóveis com filtros
Route::get('/', [PropertyController::class, 'index'])->name('home');

// Página de detalhes do imóvel
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Rotas protegidas - exigem autenticação
Route::middleware(['auth'])->group(function () {

    // Dashboard do usuário
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource de propriedades (somente leitura)
    Route::resource('properties', PropertyController::class)
        ->except(['create','store','edit','update','destroy']);
});
