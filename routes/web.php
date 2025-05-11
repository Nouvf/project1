<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Shopping;



Route::get('/', [Shopping::class, 'GetCategories'])->name('welcome');


Auth::routes();

Route::prefix('shopping')->group(function(){

    Route::get('/list/{categories_id}',[Shopping::class,'List'])->name('shopping.list');
    Route::get('/details/{id}',[Shopping::class,'Details'])->name('shopping.details');
    Route::get('/addtocart',[Shopping::class,'AddToCart'])->name('shopping.cart');
    Route::get('/checkout',[Shopping::class,'Checkout'])->name('shopping.Checkout');
    Route::post('/pay',[Shopping::class,'Pay'])->name('shopping.pay');
});

Route::prefix('dashboard')->middleware('auth')->group(function()
{
    Route::get('/dashboard', [Dashboard::class, 'Index'])->name('dashbord');
    Route::prefix('cate')->group(function(){
    Route::get('/cate', [CategoriesController::class, 'Index'])->name('categories.index');
    Route::post('/addcategories',[CategoriesController::class,'Create'])->name('categories.create');
    Route::get('/deletecategories/{id}',[CategoriesController::class,'Delete'])->name('categories.Delete');
    Route::get('/editcategories/{id}',[CategoriesController::class,'Edit'])->name('categories.Edit');
    Route::post('/updatecategories',[CategoriesController::class,'Update'])->name('categories.Update');
                

    });
        Route::prefix('products')->group(function (){
            Route::get('/products',[ProductsController::class,'Index'])->name('products.index');
            Route::post('/create',[ProductsController::class,'Create'])->name('products.create');
            Route::get('/deleteitemproduct/{id}',[ProductsController::class,'Delete'])->name('products.Delete');
            Route::get('/edititemproduct/{id}',[ProductsController::class,'Edit'])->name('products.Edit');
            Route::post('/updateproduct',[ProductsController::class,'Update'])->name('products.Update');
            



        });
});
  


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [products::class, 'GetProducts']);

Route::get('/aboutus', [products::class, 'AboutUs'])->name('AboutUs');

Route::get('/callus', [products::class, 'CallUs'])->name('callus');

Route::get('/myproducts', [products::class, 'MyProducts'])->name('myproducts');