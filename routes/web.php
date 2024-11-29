<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
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

//Categories
Route::get('/category',[CategoriesController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoriesController::class,'create'])->name('category.create');
Route::post('/category',[CategoriesController::class,'store'])->name('category.store');
Route::get('/category{id}/edit',[CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/category{id}',[CategoriesController::class, 'update'])->name('category.update');
Route::delete('/category{id}',[CategoriesController::class, 'destroy'])->name('category.destroy');

//Customer
Route::get('/customer',[CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create',[CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}edit',[CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}',[CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}',[CustomerController::class, 'destroy'])->name('customer.destroy');

//Users
Route::get('/user',[UsersController::class, 'index'])->name('user.index');
Route::get('/user/create',[UsersController::class, 'create'])->name('user.create');
Route::post('/user',[UsersController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit',[UsersController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}',[UsersController::class, 'update'])->name('user.update');
Route::delete('/user/{id}',[UsersController::class, 'destroy'])->name('user.destroy');

//Products
Route::get('/product',[ProductsController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductsController::class, 'create'])->name('product.create');
Route::post('/product',[ProductsController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit',[ProductsController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}',[ProductsController::class, 'update'])->name('product.update');
Route::delete('/product/{id}',[ProductsController::class, 'destroy'])->name('product.destroy');

// Dashboard route
Route::get('/', function () {
    return view('dasboard');
})->name('dasboard');

// Sample routes for different sections
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/products', [ProductsController::class, 'index'])->name('product.index');
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');