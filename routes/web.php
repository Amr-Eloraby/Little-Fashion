<?php

use Psy\Output\Theme;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProductConteoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryConteoller;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/story', 'story')->name('story');
    Route::get('/product', 'product')->name('product');
    Route::get('/singel-product', 'singelProduct')->name('singel-product');
    Route::get('/faqs', 'faqs')->name('faqs');
    // ===================== contact =================================
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    // ===============================================================
    Route::get('/sign-in', 'signIn')->name('sign-in');
});

Route::controller(DashboardController::class)->prefix('/admin')->name('dashboard.')->group(function () {
    Route::get('/', 'index')->name('index');
    // -----------------------------------   Product   ------------------------------------------
    Route::resource('product', ProductConteoller::class)->except(['index','show']);
    Route::get('/product/show',[ProductConteoller::class,'showProducts'])->name('product.show');
    // -----------------------------------   Category   ------------------------------------------
    Route::resource('category', CategoryConteoller::class)->except('show');
    // -----------------------------------   Contact    ------------------------------------------
    Route::get('/contact/show', 'contactShow')->name('contact.show');

});

require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
