<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Index Page
Route::get('/', [TodoController::class, 'index'])->name('todo');

// To do post
Route::post('/todo', [TodoController::class, 'store']);

Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');