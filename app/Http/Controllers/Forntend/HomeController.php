<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return view('Forntend.home');
    }
}
