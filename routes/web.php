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
Route::post('/login/action', [App\Http\Controllers\AuthController::class, 'login_action'])->name('loginAction');  // login
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');  // logout
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
Route::group(['prefix' => 'master/type', 'middleware' => 'customAuth'], function () {
    Route::get('/', [App\Http\Controllers\TypeController::class, 'index'])->name('type');
    Route::get('/get', [App\Http\Controllers\TypeController::class, 'getType'])->name('getType');
    Route::get('/new', [App\Http\Controllers\TypeController::class, 'createnew'])->name('createnew');
    Route::post('/store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
    Route::get('/edit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->name('type.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
    Route::get('/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->name('delete');
    Route::get('/view/{id}', [App\Http\Controllers\TypeController::class, 'view'])->name('view');
   
});

// Route Entitas
Route::group(['prefix' => 'master/entitas', 'middleware' => 'customAuth'], function () {
    Route::get('/', [App\Http\Controllers\EntitasController::class, 'index'])->name('type');
    Route::get('/get', [App\Http\Controllers\EntitasController::class, 'getEntitas'])->name('getEntitas');
    // Route::get('/new', [App\Http\Controllers\TypeController::class, 'createnew'])->name('createnew');
    // Route::post('/store', [App\Http\Controllers\TypeController::class, 'store'])->name('type.store');
    // Route::get('/edit/{id}', [App\Http\Controllers\TypeController::class, 'edit'])->name('type.edit');
    // Route::patch('/update/{id}', [App\Http\Controllers\TypeController::class, 'update'])->name('type.update');
    // Route::get('/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete'])->name('delete');
    // Route::get('/view/{id}', [App\Http\Controllers\TypeController::class, 'view'])->name('view');
   
});

// Route user
Route::group(['prefix' => 'master/user', 'middleware' => 'customAuth'], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('type');
    Route::get('/get',[App\Http\Controllers\UserController::class, 'getUser'])->name('getUser');
    Route::get('/new', [App\Http\Controllers\UserController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
    Route::get('/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');
   
});

// Komponen Dasar akunting
Route::group(['prefix' => 'master/komponen', 'middleware' => 'customAuth'], function () {
    Route::get('/', [App\Http\Controllers\KomponenController::class, 'index'])->name('komponen');
    Route::get('/get',[App\Http\Controllers\KomponenController::class, 'getKomponen'])->name('getKomponen');
    Route::get('/new',  [App\Http\Controllers\KomponenController::class, 'createnew'])->name('createnew');
    Route::post('/store', [App\Http\Controllers\KomponenController::class, 'store'])->name('komponen.store');
    Route::get('/edit/{id}', [App\Http\Controllers\KomponenController::class, 'edit'])->name('komponen.edit');
    Route::patch('/update/{id}', [App\Http\Controllers\KomponenController::class, 'update'])->name('komponen.update');
    Route::get('/delete/{id}',  [App\Http\Controllers\KomponenController::class, 'delete'])->name('delete');
    Route::get('/view/{id}', [App\Http\Controllers\KomponenController::class, 'view'])->name('view');
   
});

// Role Applikasi
Route::group(['prefix' => 'master/role', 'middleware' => 'customAuth'], function () {
    Route::get('/',[App\Http\Controllers\RoleController::class, 'index'])->name('role');
    Route::get('/get',[App\Http\Controllers\RoleController::class, 'getRole'])->name('getRole');
    Route::get('/new', [App\Http\Controllers\RoleController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('/edit/{id}',[App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    Route::patch('/update/{id}',[App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    Route::get('/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->name('delete');
    Route::get('/show/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('show');
   
});

// Rekening
Route::group(['prefix' => 'master/rekening', 'middleware' => 'customAuth'], function () {
    Route::get('/',[App\Http\Controllers\RekeningController::class, 'index'])->name('index');
    Route::get('/balance/group',[App\Http\Controllers\RekeningController::class, 'createGroupBalance'])->name('createGroupBalance');
    Route::get('/balance/account', [App\Http\Controllers\RekeningController::class, 'createAccountBalance'])->name('createAccountBalance');
    Route::post('/store/group', [App\Http\Controllers\RekeningController::class, 'storeGroup'])->name('storeGroup');
    Route::post('/store/account', [App\Http\Controllers\RekeningController::class, 'storeAccountBalance'])->name('storeAccountBalance');
    Route::get('/profit/group',[App\Http\Controllers\RekeningController::class, 'createGroupProfit'])->name('createGroupProfit');
    Route::post('/store/group-profit', [App\Http\Controllers\RekeningController::class, 'storeGroupProfit'])->name('storeGroupProfit');
    Route::get('/profit/account', [App\Http\Controllers\RekeningController::class, 'createAccountProfit'])->name('createAccountProfit');
    Route::post('/store/account-profit', [App\Http\Controllers\RekeningController::class, 'storeAccountProfit'])->name('storeAccountProfit');
   
});

// Jurnal 
Route::group(['prefix' => '/jurnal', 'middleware' => 'customAuth'], function () {
    Route::get('/',[App\Http\Controllers\JurnalController::class, 'index'])->name('jurnal');
    Route::get('/get',[App\Http\Controllers\JurnalController::class, 'getJurnal'])->name('getJurnal');
    Route::get('/new', [App\Http\Controllers\JurnalController::class, 'create'])->name('create');
    Route::post('/post', [App\Http\Controllers\JurnalController::class, 'jurnalStore'])->name('jurnalStore');
    // Route::post('/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    // Route::get('/edit/{id}',[App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    // Route::patch('/update/{id}',[App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    // Route::get('/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->name('delete');
    // Route::get('/show/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('show');
   
});
// Route::get('/master/rekening', [App\Http\Controllers\RekeningController::class, 'index'])->name('rekening');



// // master user
// Route::get('/master/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
// Route::get('/master/user/new', [App\Http\Controllers\UserController::class, 'create'])->name('create');
// Route::get('/master/user/get', [App\Http\Controllers\UserController::class, 'getUser'])->name('getUser');
// Route::post('/master/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
// Route::get('/master/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
// Route::patch('/master/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
// Route::get('/master/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');
// Route::get('/master/user/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('show');

// rekekning


// Komponen Dasar akunting
// Route::get('master/komponen', [App\Http\Controllers\KomponenController::class, 'index'])->name('komponen');
// Route::get('/master/komponen/new', [App\Http\Controllers\KomponenController::class, 'createnew'])->name('createnew');
// Route::get('/master/komponen/get', [App\Http\Controllers\KomponenController::class, 'getKomponen'])->name('getKomponen');
// Route::post('/master/komponen/store', [App\Http\Controllers\KomponenController::class, 'store'])->name('komponen.store');
// Route::get('/master/komponen/edit/{id}', [App\Http\Controllers\KomponenController::class, 'edit'])->name('komponen.edit');
// Route::patch('/master/komponen/update/{id}', [App\Http\Controllers\KomponenController::class, 'update'])->name('komponen.update');
// Route::get('/master/komponen/delete/{id}', [App\Http\Controllers\KomponenController::class, 'delete'])->name('delete');
// Route::get('/master/komponen/view/{id}', [App\Http\Controllers\KomponenController::class, 'view'])->name('view');

// Role Applikasi
// Route::get('master/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role');
// Route::get('/master/role/new', [App\Http\Controllers\RoleController::class, 'create'])->name('create');
// Route::get('/master/role/get', [App\Http\Controllers\RoleController::class, 'getRole'])->name('getRole');
// Route::post('/master/role/store', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
// Route::get('/master/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
// Route::patch('/master/role/update/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
// Route::get('/master/role/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->name('delete');
// Route::get('/master/role/show/{id}', [App\Http\Controllers\RoleController::class, 'show'])->name('show');

