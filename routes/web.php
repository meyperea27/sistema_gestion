<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/users', [App\Http\Controllers\UserAdminController::class, 'index'])->name('admin.users.index')->middleware('auth');
