<?php

namespace App\Http\Controllers\Forntend;

use Illuminate\Http\Request;
use App\Models\OtherPageItem;
use App\Http\Controllers\Controller;

class ForgetPageController extends Controller
{
    public function index()
    {
        $other_page_item = OtherPageItem::where('id',1)->first();
        return view('Forntend.forget_password', compact('other_page_item'));
    }
}
