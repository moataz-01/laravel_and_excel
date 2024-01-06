<?php

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

Route::get('users', [UserController::class, 'index']);
Route::get('users/data', [UserController::class, 'data']);
Route::get('users/export', [UserController::class, 'export'])->name('users.export');
Route::post('users/import', [UserController::class, 'import'])->name('users.import');
