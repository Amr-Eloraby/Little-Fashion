<?php

use App\Http\Controllers\DashboardController;
use Psy\Output\Theme;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/home', 'index')->name('index');
    Route::get('/story', 'story')->name('story');
    Route::get('/product', 'product')->name('product');
    Route::get('/singel-product', 'singelProduct')->name('singel-product');
    Route::get('/faqs', 'faqs')->name('faqs');
    // ===================== contact =================================
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    // ===============================================================

    Route::get('/sign-in', 'signIn')->name('sign-in');
    Route::get('/sign-up', 'signUp')->name('sign-up');
});

Route::controller(DashboardController::class)->name('dashboard.')->group(function () {
    Route::get('/dashboard1', 'index')->name('index');
    // -----------------------------------   Product   ------------------------------------------
    Route::get('/dashboard1/product/create', 'productCreate')->name('product.create');
    Route::post('/dashboard1/product/store', 'productStore')->name('product.store');
    Route::get('/dashboard1/product/show', 'productShow')->name('product.show');
    Route::get('/dashboard1/product/{id}/edit', 'productEdit')->name('product.edit');
    Route::put('/dashboard1/product/{id}/update', 'productUpdate')->name('product.update');
    Route::delete('/dashboard1/product/{id}', 'productDestroy')->name('product.destroy');
    // -----------------------------------   Category   ------------------------------------------
    Route::get('/dashboard1/category/create', 'categoryCreate')->name('category.create');
    Route::post('/dashboard1/category/store', 'categoryStore')->name('category.store');
    Route::get('/dashboard1/category/{id}/edit', 'categoryEdit')->name('category.edit');
    Route::put('/dashboard1/category/{id}/update', 'categoryUpdate')->name('category.update');
    Route::delete('/dashboard1/category/{id}', 'categoryDestroy')->name('category.destroy');
    Route::get('/dashboard1/category/show', 'categoryShow')->name('category.show');
    // -----------------------------------   Contact    ------------------------------------------
    Route::get('/dashboard1/contact/show', 'contactShow')->name('contact.show');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
