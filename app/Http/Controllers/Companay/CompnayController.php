<?php

namespace App\Http\Controllers\Companay;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompnayController extends Controller
{
    public function dashboard()
    {
        return view('company.dashboard');
    }
}
