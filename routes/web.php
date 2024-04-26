<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/level/add', [LevelController::class, 'add'])->name('/level/add');
// Route::post('/level/add_save', [LevelController::class, 'add_save'])->name('/level/add_save');

// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index'])->name('/user');

// Route::get('/user/add', [UserController::class, 'add'])->name('/user/add');
// Route::get('/user/update/{id}', [UserController::class, 'update'])->name('/user/update');
// Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

// Route::post('/user/add_save', [UserController::class, 'add_save'])->name('/user/add_save');

// Route::put('/user/update_save/{id}', [UserController::class, 'update_save'])->name('/user/update_save');

// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::put('/kategori/update_save/{id}', [KategoriController::class, 'update_save'])->name('kategori.update_save');
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

// Route::resource('m_user', POSController::class);

Route::get('/', [WelcomeController::class, 'index']);


// User Route
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

// Level Route
Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);
    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete('/{id}', [levelController::class, 'destroy']);
});

// Category Route
Route::group(['prefix' => 'category'], function() {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

// Item Route
Route::group(['prefix' => 'item'], function() {
    Route::get('/', [ItemController::class, 'index']);
    Route::post('/list', [ItemController::class, 'list']);
    Route::get('/create', [ItemController::class, 'create']);
    Route::post('/', [ItemController::class, 'store']);
    Route::get('/{id}', [ItemController::class, 'show']);
    Route::get('/{id}/edit', [ItemController::class, 'edit']);
    Route::put('/{id}', [ItemController::class, 'update']);
    Route::delete('/{id}', [ItemController::class, 'destroy']);
});

// Stok Route
Route::group(['prefix' => 'stok'], function() {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});

// Sales Route
Route::group(['prefix' => 'sales'], function() {
    Route::get('/', [SalesController::class, 'index']);
    Route::post('/list', [SalesController::class, 'list']);
    Route::get('/create', [SalesController::class, 'create']);
    Route::post('/', [SalesController::class, 'store']);
    Route::get('/{id}', [SalesController::class, 'show']);
    Route::get('/{id}/edit', [SalesController::class, 'edit']);
    Route::put('/{id}', [SalesController::class, 'update']);
    Route::delete('/{id}', [SalesController::class, 'destroy']);
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// Grup middleware 'auth' untuk melindungi route admin dan manager
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});
