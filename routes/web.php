<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MetalController;
use App\Http\Controllers\GemstoneController;
use App\Http\Controllers\ProductController;

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

Route::get('/admin/login',function(){
    return view('admin.login');
});

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('admin/category')->name('admin.category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('/{id}', [CategoryController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/metal')->name('admin.metal.')->group(function () {
        Route::get('/', [MetalController::class, 'index'])->name('index');
        Route::get('/create', [MetalController::class, 'create'])->name('create');
        Route::post('/', [MetalController::class, 'store'])->name('store');
        Route::get('/{id}', [MetalController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [MetalController::class, 'edit'])->name('edit');
        Route::put('/{id}', [MetalController::class, 'update'])->name('update');
        Route::delete('/{id}', [MetalController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/gemstone')->name('admin.gemstone.')->group(function () {
        Route::get('/', [GemstoneController::class, 'index'])->name('index');
        Route::get('/create', [GemstoneController::class, 'create'])->name('create');
        Route::post('/', [GemstoneController::class, 'store'])->name('store');
        Route::get('/{id}', [GemstoneController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [GemstoneController::class, 'edit'])->name('edit');
        Route::put('/{id}', [GemstoneController::class, 'update'])->name('update');
        Route::delete('/{id}', [GemstoneController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('admin/product')->name('admin.product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('{id}', [ProductController::class, 'show'])->name('show');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('{id}', [ProductController::class, 'destroy'])->name('destroy');
    });
    
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
});