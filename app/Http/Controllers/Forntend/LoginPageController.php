<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\OtherPageItem;


class LoginPageController extends Controller
{
    public function index()
    {
        $other_page_item = OtherPageItem::where('id',1)->first();
        return view('forntend.login', compact('other_page_item'));
    }

}

