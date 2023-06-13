<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbaordController;
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

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage')->middleware('guest');
    Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

    Route::middleware('auth')->group(function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashbaordController::class, 'index'])->name('admin.home');
    });
});
