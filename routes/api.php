<?php

use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\RegisterController;
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

Route::post('/register', RegisterController::class)->name('register');
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