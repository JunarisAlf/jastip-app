<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;
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

Route::get('admin/login', [AuthController::class, 'loginPage'])->name('loginPage')->middleware('guest');
Route::post('admin/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::prefix('/admin')->middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/ganti-password', [AuthController::class, 'changePassword'])->name('admin.changePassword');

    Route::get('/dashboard', [DashbaordController::class, 'index'])->name('admin.home');

    Route::middleware('superadmin')->group(function(){
        Route::get('/cabang', [CabangController::class, 'index'])->name('admin.cabang');
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.admin');
    });
    Route::get('/kurir', [KurirController::class, 'index'])->name('admin.kurir');
    Route::get('/toko', [TokoController::class, 'index'])->name('admin.toko');
    Route::get('/toko/{toko}/produk', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/iklan', [AdsController::class, 'index'])->name('admin.ads');
});

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/item', [FrontController::class, 'searchRes'])->name('front.searchRes');
Route::get('/cabang', [FrontController::class, 'cabangRes'])->name('front.cabangRes');
Route::get('/toko/{slug}', [FrontController::class, 'catalog'])->name('front.catalog');
Route::get('/order', [FrontController::class, 'order'])->name('front.order');
Route::get('/confirm', [FrontController::class, 'confirm'])->name('front.confirm');




