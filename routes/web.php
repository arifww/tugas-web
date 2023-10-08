<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\WelcomeController;
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


Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('nasabahs', [NasabahController::class, 'index'])->name('nasabahs.index');
Route::get('nasabahs/create', [NasabahController::class, 'create'])->name('nasabahs.create');
Route::post('nasabahs', [NasabahController::class, 'store'])->name('nasabahs.store');
Route::get('nasabahs/{id}/edit', [NasabahController::class, 'edit'])->name('nasabahs.edit');
Route::put('nasabahs/{id}', [NasabahController::class, 'update'])->name('nasabahs.update');
Route::delete('nasabahs/{id}', [NasabahController::class, 'destroy'])->name('nasabahs.destroy');

Route::get('welcomes', [WelcomeController::class, 'index'])->name('welcomes.index');


