<?php

namespace App\Http\Controllers\Forntend;

use Illuminate\Http\Request;
use App\Models\OtherPageItem;
use App\Http\Controllers\Controller;

class SignupPageController extends Controller

{
   public function index()
   {
    $other_page_item = OtherPageItem::where('id',1)->first();
    return view('forntend.signup', compact('other_page_item'));
   }
}
