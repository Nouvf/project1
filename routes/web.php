<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [products::class, 'GetProducts']);

Route::get('/aboutus', [products::class, 'AboutUs'])->name('AboutUs');

Route::get('/callus', [products::class, 'CallUs'])->name('callus');

Route::get('/myproducts', [products::class, 'MyProducts'])->name('myproducts');

