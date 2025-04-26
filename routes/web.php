<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [products::class, 'GetProducts']);

Route::get('/aboutus', [products::class, 'AboutUs'])->name('AboutUs');

Route::get('/callus', [products::class, 'CallUs'])->name('callus');

Route::get('/myproducts', [products::class, 'MyProducts'])->name('myproducts');

Route::get('/dashboard', [Dashboard::class, 'Index'])->name('dashbord');

Route::get('/cate', [CategoriesController::class, 'Index'])->name('categories.index');

Route::post('/addcategories',[CategoriesController::class,'Create'])->name('categories.create');
Route::get('/deletecategories/{id}',[CategoriesController::class,'Delete'])->name('categories.Delete');

Route::get('/editcategories/{id}',[CategoriesController::class,'Edit'])->name('categories.Edit');

Route::post('/updatecategories',[CategoriesController::class,'Update'])->name('categories.Update');


Route::get('/products',[ProductsController::class,'Index'])->name('products.index');

Route::post('/create',[ProductsController::class,'Create'])->name('products.create');

Route::get('/deleteitemproduct/{id}',[ProductsController::class,'Delete'])->name('products.Delete');

Route::get('/edititemproduct/{id}',[ProductsController::class,'Edit'])->name('products.Edit');

