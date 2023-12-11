<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route User
Route::get('/user', [UserController::class, 'index']);

// Route Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);

// Route menu
Route::get('/menu', [MenuController::class, 'index'])->middleware(['auth:sanctum']);
Route::post('/tambah-menu', [MenuController::class, 'store'])->middleware(['auth:sanctum']);
Route::put('/edit-menu/{id}', [MenuController::class, 'update'])->middleware(['auth:sanctum']);
Route::delete('/hapus-menu/{id}', [MenuController::class, 'destroy'])->middleware(['auth:sanctum']);

// Route Login & Logout
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);
