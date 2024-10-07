<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


    Route::get('/',[SiteController::class,'index'])->name('site.index');
    Route::get('about',[SiteController::class,'about'])->name('site.about');
    Route::get('shop',[SiteController::class,'shop'])->name('site.shop');
    Route::get('contact',[SiteController::class,'contact'])->name('site.contact');
    Route::get('search',[SiteController::class,'search'])->name('site.search');
    Route::get('all-category',[SiteController::class,'all_category'])->name('site.all_category');
    Route::get('category/{id}',[SiteController::class,'category'])->name('site.category');
    Route::get('all-blog',[SiteController::class,'all_blog'])->name('site.all_blog');
    Route::get('blog/{id}',[SiteController::class,'blog'])->name('site.blog');
    Route::get('product/{id}',[SiteController::class,'product'])->name('site.product');
    Route::post('product/{id}/review',[SiteController::class,'review'])->name('site.review');

    // middleware('auth','Check')
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/',[AdminController::class ,'index'])->name('index');
        Route::resource('categories',CategoryController::class);
        Route::resource('products',ProductController::class);
    });

    // Auth::routes();

    // Route::post('/add-to-cart',[CartController::class,'add_to_cart'])->middleware('auth')->name('site.add_to_cart');
    // Route::get('/cart',[CartController::class,'cart'])->middleware('auth')->name('site.cart');
    // Route::get('/checkout',[CartController::class,'checkout'])->middleware('auth')->name('site.checkout');
    // Route::get('/payment',[CartController::class,'payment'])->middleware('auth')->name('site.payment');
    // Route::get('/remove-cart/{id}',[CartController::class,'remove_cart'])->name('site.remove_cart');

    Route::view('/payment/success', 'site.payment_success' )->name('site.payment_success');
    Route::view('/payment/fail', 'site.payment_fail')->name('site.payment_fail');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
