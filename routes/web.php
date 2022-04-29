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

/*
|--------------------------------------------------------------------------
| Web Routes Untuk Data Master
|--------------------------------------------------------------------------
|
*/

// Route Type Entitas
Route::get('/master/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
Route::get('/master/type/get', [App\Http\Controllers\TypeController::class, 'getType'])->name('getType');
Route::get('/master/type/new', [App\Http\Controllers\TypeController::class, 'createnew'])->name('createnew');
Route::post('/master/type/store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
Route::get('/master/type/edit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->name('type.edit');
Route::patch('/master/type/update/{id}', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
Route::get('/master/type/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->name('delete');
Route::get('/master/type/view/{id}', [App\Http\Controllers\TypeController::class, 'view'])->name('view');

Route::get('/master/entitas', [App\Http\Controllers\EntitasController::class, 'index'])->name('entitas');
Route::get('/master/entitas/get', [App\Http\Controllers\EntitasController::class, 'getEntitas'])->name('getEntitas');

// user
Route::get('/master/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::post('/master/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

// rekekning
Route::get('/master/rekening', [App\Http\Controllers\RekeningController::class, 'index'])->name('rekening');

// Komponen Dasar akunting
Route::get('master/komponen', [App\Http\Controllers\KomponenController::class, 'index'])->name('komponen');
Route::get('/master/komponen/new', [App\Http\Controllers\KomponenController::class, 'createnew'])->name('createnew');
Route::get('/master/komponen/get', [App\Http\Controllers\KomponenController::class, 'getKomponen'])->name('getKomponen');
Route::post('/master/komponen/store', [App\Http\Controllers\KomponenController::class, 'store'])->name('komponen.store');
Route::get('/master/komponen/edit/{id}', [App\Http\Controllers\KomponenController::class, 'edit'])->name('komponen.edit');
Route::patch('/master/komponen/update/{id}', [App\Http\Controllers\KomponenController::class, 'update'])->name('komponen.update');
Route::get('/master/komponen/delete/{id}', [App\Http\Controllers\KomponenController::class, 'delete'])->name('delete');
Route::get('/master/komponen/view/{id}', [App\Http\Controllers\KomponenController::class, 'view'])->name('view');

