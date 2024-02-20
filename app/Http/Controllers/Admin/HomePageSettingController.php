<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use Illuminate\Http\Request;

class HomePageSettingController extends Controller
{
    public function index()
    {
        $home_page_data = HomePageItem::where('id', 1)->first();

        return view('admin.home_page_setting', compact('home_page_data'));
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
        ]);

        if ($request->hasFile('background')) {
            $request->validate([
                'background' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path("forntend/uploads/" . $home_page_data->background));

            $ext = $request->file('background')->extension();
            $final_name = 'home_banner' . '.' . $ext;

            $request->file('background')->move(public_path("forntend/uploads/"), $final_name);

            $home_page_data->background = $final_name;
        }


        $home_page_data->heading = $request->heading;
        $home_page_data->text = $request->text;
        $home_page_data->job_title = $request->job_title;
        $home_page_data->job_location = $request->job_location;
        $home_page_data->job_category = $request->job_category;
        $home_page_data->search = $request->search;
        $home_page_data->update();

        return redirect()->back()->with('success', 'Home Page Information updated Successfullly');
    }
}
