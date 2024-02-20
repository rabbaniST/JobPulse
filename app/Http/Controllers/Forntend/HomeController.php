<?php

namespace App\Http\Controllers\Forntend;

use App\Models\HomePageItem;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = HomePageItem::where('id',1)->first();
        return view('Forntend.home',compact('home_page_data'));
    }
}
