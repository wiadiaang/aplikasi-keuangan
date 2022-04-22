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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Route Type Entitas
Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
Route::get('/type/get', [App\Http\Controllers\TypeController::class, 'getType'])->name('getType');

Route::get('/entitas', [App\Http\Controllers\EntitasController::class, 'index'])->name('entitas');

// user
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

// rekekning
Route::get('/rekening', [App\Http\Controllers\RekeningController::class, 'index'])->name('rekening');
