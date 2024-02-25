<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function index()
    {
        $job_categories = JobCategory::get();
        return view('admin.job_category',compact('job_categories'));
    }

    public function create(Request $request)
    {
        return view('admin.job_category_create');
    }
}
