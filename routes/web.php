<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/profile',[ProfileController::class,'index']);

Route::get('/about',[AboutController::class,'index'])->name('about');

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/products',[ProductController::class,'index'])->name('products.index');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products',[ProductController::class,'store'])->name('products.store');

Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

Route::put('/products/{product}/update',[ProductController::class,'update'])->name('products.update');

Route::delete('/products/{product}/delete',[ProductController::class,'delete'])->name('products.delete');



