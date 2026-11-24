<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('pages.home');
});


Route::get('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'authenticate'])
    ->name('admin.authenticate');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

Route::get('/admin/messages/{id}', [AdminController::class, 'showMessage'])
    ->name('admin.messages.show');

Route::delete('/admin/messages/{id}', [AdminController::class, 'deleteMessage'])
    ->name('admin.messages.delete');

Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');