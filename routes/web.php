<?php

use App\Http\Controllers\MarketController;
use Illuminate\Support\Facades\Route;



Route::controller(MarketController::class)
    ->name('market.')
    ->group(function(){
        Route::get('/market', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/blog','blog')->name('blog');
        Route::get('/detail-blog','detailBlog')->name('blog.detail');
        Route::get('/cart','cart')->name('cart');
        Route::get('/checkout','checkout')->name('checkout');
        Route::get('/contact','contact')->name('contact');
        Route::get('/account','account')->name('account');
        Route::get('/order','order')->name('order');
        Route::get('/product','product')->name('product');
        Route::get('/shop','shop')->name('shop');
        Route::get('/wishlist','wishlist')->name('wishlist');
    });
