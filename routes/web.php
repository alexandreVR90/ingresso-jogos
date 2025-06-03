<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\LotController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GamePublicController;
use Illuminate\Support\Facades\Route;

// 🔸 Página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// 🔸 Detalhe público do jogo
Route::get('/games/{game}', [GamePublicController::class, 'show'])->name('games.show');

// 🔸 Dashboard autenticado
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 🔸 Rotas autenticadas
Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 🔐 Painel Admin
    Route::prefix('admin')->name('admin.')->group(function () {
        // CRUD de Jogos
        Route::resource('games', GameController::class);

        // CRUD de Lotes dentro dos Jogos
        Route::resource('games.lots', LotController::class)->shallow();
    });
});

// 🔸 Auth (Laravel Breeze, Jetstream, Fortify, etc.)
require __DIR__.'/auth.php';
