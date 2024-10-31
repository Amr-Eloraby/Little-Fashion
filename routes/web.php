<?php

use Psy\Output\Theme;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProductConteoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryConteoller;
use App\Http\Controllers\DashboardController;

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

Route::controller(DashboardController::class)->prefix('/admin')->name('dashboard.')->group(function () {
    Route::get('/', 'index')->name('index');
    // -----------------------------------   Product   ------------------------------------------
    Route::resource('product', ProductConteoller::class)->except('show');
    // -----------------------------------   Category   ------------------------------------------
    Route::resource('category', CategoryConteoller::class)->except('show');
    // -----------------------------------   Contact    ------------------------------------------
    Route::get('/contact/show', 'contactShow')->name('contact.show');

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
