<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageSettingController extends Controller
{
    public function index()
    {
        return view('admin.home_page_setting');
    }
}
