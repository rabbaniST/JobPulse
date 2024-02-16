<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard')->middleware('admin:admin');

Route::get('/admin/login', [LoginController::class, 'login'])->name('admin_login');
Route::get('/admin/forget-password', [LoginController::class, 'forgetPassword'])->name('admin_foget_password');
Route::post('/admin/forget-password', [LoginController::class, 'forgetPasswordSubmit'])->name('admin_foget_password_submit');

Route::post('/admin/login-submit', [LoginController::class, 'loginSubmit'])->name('admin_login_submit');

Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin_logout');

Route::get('/admin/reset-password/{token}/{email}', [LoginController::class, 'resetPassword'])->name('reset_password');

Route::post('/admin/reset-password-submit', [LoginController::class, 'resetPasswordSubmit'])->name('admin_reset_password_submit');
