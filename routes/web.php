<?php

use App\Http\Middleware\CheckAdminRoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/admin/users', 'users')->middleware(['checkAdminRole'])->name('users');
Route::view('/admin/companies', 'users')->middleware(['checkAdminRole'])->name('companies');
Route::view('/admin/settings', 'users')->middleware(['checkAdminRole'])->name('settings');
Route::view('/offers', 'users')->name('offers');
Route::view('/orders', 'users')->name('orders');
Route::view('/billing-details', 'users')->name('billing-details');
require __DIR__.'/auth.php';
