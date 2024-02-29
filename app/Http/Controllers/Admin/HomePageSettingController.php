<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePageItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageSettingController extends Controller
{
    public function index()
    {
        $home_page_data = HomePageItem::where('id', 1)->first();
        return view('admin.home_page_setting', compact('home_page_data', ));
    }

    public function update(Request $request)
    {
        $home_page_data = HomePageItem::where('id', 1)->first();
        $request->validate([
            'heading' => 'required',
            'text' => 'nullable',
            'job_title' => 'required',
            'job_location' => 'required',
            'job_category' => 'required',
            'search' => 'required',
            'job_category_heading' => 'required',
            'job_category_status' => 'required',
            'featured_job_heading' => 'required',
            'featured_job_status' => 'required',
        ]);

        if ($request->hasFile('background')) {
            $request->validate([
                'background' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path("forntend/uploads/" . $home_page_data->background));

            $ext = $request->file('background')->extension();
            $final_name = 'home_banner' . '.' . $ext;

            $request->file('background')->move(public_path("forntend/uploads/"), $final_name);

            $home_page_data->why_choose_background = $final_name;
        }

        if ($request->hasFile('why_choose_background')) {
            $request->validate([
                'why_choose_background' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path("forntend/uploads/" . $home_page_data->why_choose_background));

            $ext1 = $request->file('why_choose_background')->extension();
            $final_name = 'why_choose_background' . '.' . $ext1;

            $request->file('why_choose_background')->move(public_path("forntend/uploads/"), $final_name);

            $home_page_data->why_choose_background = $final_name;
        }


        $home_page_data->heading = $request->heading;
        $home_page_data->text = $request->text;
        $home_page_data->job_title = $request->job_title;
        $home_page_data->job_location = $request->job_location;
        $home_page_data->job_category = $request->job_category;
        $home_page_data->search = $request->search;
        $home_page_data->job_category_heading = $request->job_category_heading;
        $home_page_data->job_category_subheading = $request->job_category_subheading;
        $home_page_data->job_category_status = $request->job_category_status;

        $home_page_data->why_choose_heading = $request->why_choose_heading;
        $home_page_data->why_choose_subheading = $request->why_choose_subheading;
        $home_page_data->why_choose_status = $request->why_choose_status;

        $home_page_data->featured_job_heading = $request->featured_job_heading;
        $home_page_data->featured_job_subheading = $request->featured_job_subheading;
        $home_page_data->featured_job_status = $request->featured_job_status;
        $home_page_data->update();

        return redirect()->back()->with('success', 'Home Page Information updated Successfullly');
    }
}
