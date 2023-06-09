<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::delete('/shop/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
Route::post('/shop/update/{id}', [ProductController::class, 'update'])->name('update');
Route::get('/shop/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/shop/store', [ProductController::class, 'store'])->name('store');
Route::get('/shop/add', [ProductController::class, 'create'])->name('add');
Route::get('/shop', [App\Http\Controllers\ProductController::class, 'index'])->name('shop');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');