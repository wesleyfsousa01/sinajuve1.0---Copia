<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index');
Route::view('/ping', 'ping.index');

Route::get('/usuario', [UserController::class, 'index'])->name('usuario.index');
Route::post('/usuario', [UserController::class, 'store'])->name('usuario.store');
Route::get('/usuario/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/{id}', [UserController::class, 'update'])->name('usuario.update');
Route::delete('/usuario/{id}', [UserController::class, 'destroy'])->name('usuario.destroy');
