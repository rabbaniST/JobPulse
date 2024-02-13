<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function forgetPassword()
    {
        return view('admin.forget_password');
    }
}
