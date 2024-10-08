<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Rotas de autenticação
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Rotas de usuários
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');

    // Rotas de livros
    Route::get('/books', [BookController::class, 'index'])->name('book.index');
    Route::get('/books/{book}', [BookController::class, 'show'])->name('book.show');
    Route::post('/books', [BookController::class, 'store'])->name('book.store');
    Route::put('/books/{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('book.destroy');

    // Rotas de gêneros
    Route::get('/genres', [GenreController::class, 'index'])->name('genre.index');
    Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genre.show');
    Route::post('/genres', [GenreController::class, 'store'])->name('genre.store');
    Route::put('/genres/{genre}', [GenreController::class, 'update'])->name('genre.update');
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genre.destroy');

    // Rotas de empréstimos
    Route::get('/loans', [LoanController::class, 'index'])->name('loan.index');
    Route::get('/loans/{loan}', [LoanController::class, 'show'])->name('loan.show');
    Route::post('/loans', [LoanController::class, 'store'])->name('loan.store');
    Route::put('/loans/{loan}', [LoanController::class, 'update'])->name('loan.update');
    Route::delete('/loans/{loan}', [LoanController::class, 'destroy'])->name('loan.destroy');
});
