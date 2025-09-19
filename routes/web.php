<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('usuarios', [UsersController::class, 'index'])->name('users.index');
Route::delete('usuarios/{id}',[UsersController::class, 'destroy'])->name('users.destroy');
Route::get('usuarios/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('usuarios/{id}', [UsersController::class, 'update'])->name('users.update');
