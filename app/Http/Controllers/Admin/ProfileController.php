<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function  index()
    {
        return view('admin.profile');
    }


    public function profileSubmit(Request $request)
    {
        $data = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        $request->validate([
            'name'   => 'required',
            'email'  => 'required|email',
        ]);

        if($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $data->password = Hash::make($request->password);
        }


        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif'
            ]);
            unlink(public_path("admin/uploads" . $data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'admin'.'.'.$ext;

            $request->file('photo')->move(public_path('admin/uploads'), $final_name);
            $data->photo = $final_name;
        }

        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();

        return redirect()->back()->with('success', 'Profile Information updated Successfullly');
    }
}
