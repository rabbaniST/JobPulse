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

Route::post('/admin/login-submit', [LoginController::class, 'loginSubmit'])->name('admin_login_submit');

Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin_logout');
