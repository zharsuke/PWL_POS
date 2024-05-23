<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('/register', RegisterController::class)->name('register');
Route::post('/register1', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/logout', LogoutController::class)->name('logout');

Route::middleware('auth:api')->get('levels', [LevelController::class, 'index']);
Route::middleware('auth:api')->post('levels', [LevelController::class, 'store']);
Route::middleware('auth:api')->get('levels/{level}', [LevelController::class, 'show']);
Route::middleware('auth:api')->put('levels/{level}', [LevelController::class, 'update']);
Route::middleware('auth:api')->delete('levels/{level}', [LevelController::class, 'destroy']);

Route::middleware('auth:api')->get('user', [UserController::class, 'index']);
Route::middleware('auth:api')->post('user', [UserController::class, 'store']);
Route::middleware('auth:api')->get('user/{user}', [UserController::class, 'show']);
Route::middleware('auth:api')->put('user/{user}', [UserController::class, 'update']);
Route::middleware('auth:api')->delete('user/{user}', [UserController::class, 'destroy']);

Route::middleware('auth:api')->get('barang', [BarangController::class, 'index']);
// Route::middleware('auth:api')->post('barang', [BarangController::class, 'store']);
Route::middleware('auth:api')->post('barang1', [BarangController::class, 'store']);
Route::middleware('auth:api')->get('barang/{barang}', [BarangController::class, 'show']);
Route::middleware('auth:api')->put('barang/{barang}', [BarangController::class, 'update']);
Route::middleware('auth:api')->delete('barang/{barang}', [BarangController::class, 'destroy']);

Route::middleware('auth:api')->get('kategori', [KategoriController::class, 'index']);
Route::middleware('auth:api')->post('kategori', [KategoriController::class, 'store']);
Route::middleware('auth:api')->get('kategori/{kategori}', [KategoriController::class, 'show']);
Route::middleware('auth:api')->put('kategori/{kategori}', [KategoriController::class, 'update']);
Route::middleware('auth:api')->delete('kategori/{kategori}', [KategoriController::class, 'destroy']);

Route::middleware('auth:api')->get('sales', [SalesController::class, 'index']);
Route::middleware('auth:api')->post('sales', [SalesController::class, 'store']);