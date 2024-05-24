<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::post('/{user}/post-request', [UserController::class, 'postRequest'])->name('postRequest');
Route::get('/{user}/tambah-product', [UserController::class, 'handleRequest'])->name('form_product');
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/{user}/product/{product}', [UserController::class, 'editProduct'])->name('edit_product');
Route::put('/{user}/product/{product}/update', [UserController::class, 'updateProduct'])->name('update_product');
Route::post('/{user}/product/{product}/delete', [UserController::class, 'deleteProduct'])->name('delete_product');
Route::get('/profile/{user}', [UserController::class, 'getProfile'])->name('get_profile');

Route::get('/admin/{user}/list-products', [UserController::class, 'getAdmin'])->name('admin_page');

Route::get('/cafe-amandemy', [UserController::class, 'cafe']);

Route::get('/register', [UserController::class, 'register']);
Route::post('register-user', [UserController::class, 'registerUser'])->name('register_user');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login_user');

Route::get('/dashboard', [UserController::class, 'dashboard'])
  ->name('dashboard')->middleware(['authenticate']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login/google', [UserController::class, 'loginGoogle'])->name('login_google');
Route::get('/login/google/callback', [UserController::class, 'loginGoogleCallback'])->name('callback_google');
// Route::post('/posts/{post}/delete', [PostController::class, 'delete']);

Route::get('/export-data', [UserController::class, 'exportData'])->name('exportData');