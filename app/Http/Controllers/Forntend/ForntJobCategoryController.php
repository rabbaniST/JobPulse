<?php

namespace App\Http\Controllers\Forntend;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForntJobCategoryController extends Controller
{
    public function categories()
    {
        $job_category_data = JobCategory::orderBy('name', 'asc')->get();
        return view('Forntend.job_category', compact('job_category_data'));
    }
}
