<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\AuthController::class, 'index'])->name('login');  // login
Route::get('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register'); // register
Route::post('/register/post', [App\Http\Controllers\AuthController::class, 'register_action'])->name('register.post'); // register


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route Type Entitas
Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
Route::get('/type/get', [App\Http\Controllers\TypeController::class, 'getType'])->name('getType');
Route::get('/type/new', [App\Http\Controllers\TypeController::class, 'createnew'])->name('createnew');
Route::post('/type/store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');

Route::get('/entitas', [App\Http\Controllers\EntitasController::class, 'index'])->name('entitas');
Route::get('/entitas/get', [App\Http\Controllers\EntitasController::class, 'getEntitas'])->name('getEntitas');

// user
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::post('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

// rekekning
Route::get('/rekening', [App\Http\Controllers\RekeningController::class, 'index'])->name('rekening');
