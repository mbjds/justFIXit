<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('/admin/users', 'users')->name('users');
Route::view('/admin/companies', 'users')->name('companies');
Route::view('/admin/settings', 'users')->name('settings');
Route::view('/offers', 'users')->name('offers');
Route::view('/orders', 'users')->name('orders');
Route::view('/billing-details', 'users')->name('billing-details');
require __DIR__.'/auth.php';
