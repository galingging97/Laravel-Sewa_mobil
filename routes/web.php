<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'])->name('Homepage');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/detail',[HomeController::class, 'detail'])->name('detail');
Route::get('admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
