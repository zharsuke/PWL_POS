<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('/user');

Route::get('/user/add', [UserController::class, 'add'])->name('/user/add');
Route::get('/user/update/{id}', [UserController::class, 'update'])->name('/user/update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('/user/delete');

Route::post('/user/add_save', [UserController::class, 'add_save'])->name('/user/add_save');

Route::put('/user/update_save/{id}', [UserController::class, 'update_save'])->name('/user/update_save');