<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/create-user', [UserController::class, 'create'])->name('users.create');
Route::post('/store-user', [UserController::class, 'store'])->name('users.store');
Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/update-user/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/delete-user/{user}', [UserController::class, 'delete'])->name('users.delete');