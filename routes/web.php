<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PrinciplesController;
use App\Http\Controllers\ValuesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');;
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');;
Route::patch('/users/{user}', [UsersController::class, 'update'])->name('users.update');;
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');


Route::get('/principles', [PrinciplesController::class, 'index'])->name('principles.index');
Route::get('/principles/create', [PrinciplesController::class, 'create'])->name('principles.create');
Route::post('/principles', [PrinciplesController::class, 'store'])->name('principles.store');;
Route::get('/principles/{principle}/edit', [PrinciplesController::class, 'edit'])->name('principles.edit');;
Route::patch('/principles/{principle}', [PrinciplesController::class, 'update'])->name('principles.update');;
Route::delete('/principles/{principle}', [PrinciplesController::class, 'destroy'])->name('principles.destroy');


Route::get('/values', [ValuesController::class, 'index'])->name('values.index');
Route::get('/values/create', [ValuesController::class, 'create'])->name('values.create');
Route::post('/values', [ValuesController::class, 'store'])->name('values.store');;
Route::get('/values/{value}/edit', [ValuesController::class, 'edit'])->name('values.edit');;
Route::patch('/values/{value}', [ValuesController::class, 'update'])->name('values.update');;
Route::delete('/values/{value}', [ValuesController::class, 'destroy'])->name('values.destroy');

