<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function loginSubmit(Request $request)
{
    // $pass = Hash::make(123);
    // dd($pass);
    $this->validate($request, [
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->route('admin_dashboard');
    } else {
        return redirect()->route('admin_login')->with(['error' => 'Information is not correct']);
    }
}

public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('admin_login');
}
}
