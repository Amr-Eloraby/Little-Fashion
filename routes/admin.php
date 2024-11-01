<?php

use App\Http\Controllers\admin\AdminLoginController;
use Psy\Output\Theme;
use Illuminate\Support\Facades\Route;


Route::controller(AdminLoginController::class)->prefix('/admin')->name('admin.')->group(function(){

    Route::get('/login','index')->name('index');
    Route::post('/login/store','store')->name('store');

});

