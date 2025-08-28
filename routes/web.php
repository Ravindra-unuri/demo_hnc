<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OnlineShopController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UsersideAboutController;
use App\Http\Controllers\UsersideContactController;
use App\Http\Controllers\UsersideHomeController;
use App\Http\Controllers\UsersideOnlineShopController;
use App\Http\Controllers\UsersideProductController;
use Illuminate\Support\Facades\Route;

//=============================================== user pages  ================================================

Route::get('/', [UsersideHomeController::class, 'index'])->name('home');
Route::get('/about', [UsersideAboutController::class, 'index'])->name('about');
Route::get('/user-product', [UsersideProductController::class, 'index'])->name('user-products');
Route::get('/user-online-shop', [UsersideOnlineShopController::class, 'index'])->name('user-online-shops');
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/contact', [UsersideContactController::class, 'index'])->name('contact');

// Route::get('/products', [UsersideProductController::class, 'index'])->name('products');

//=============================================== Admin pages  ===============================================
// login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard.index');
    Route::get('/subscribers/read', [SubscriberController::class, 'index'])->name('subscribers.index');

    Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
    Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
    Route::get('/admins/read', [AdminController::class, 'index'])->name('admins.index');

    Route::get('/online-shops/create', [OnlineShopController::class, 'create'])->name('online_shops.create');
    Route::post('/online-shops', [OnlineShopController::class, 'store'])->name('online_shops.store');
    Route::get('/online-shops/read', [OnlineShopController::class, 'index'])->name('online_shops.index');


    Route::get('/categories/create', [ProductCategoryController::class, 'create'])->name('product_categories.create');
    Route::post('/categories', [ProductCategoryController::class, 'store'])->name('product_categories.store');
    Route::get('/categories/read', [ProductCategoryController::class, 'index'])->name('product_categories.index');


    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/read', [ProductController::class, 'index'])->name('products.index');

    Route::get('/feedbacks/create', [FeedbackController::class, 'create'])->name('feedbacks.create');
    Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedbacks.store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
