<?php

namespace App\Http\Controllers\Forntend;

use App\Models\JobCategory;
use App\Models\HomePageItem;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        $home_page_data = HomePageItem::where('id',1)->first();
        $job_category_data = JobCategory::orderBy('name', 'ASC')->take('9')->get();
        return view('Forntend.home',compact('home_page_data', 'job_category_data'));
    }
}
