<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $pages = Page::where('status','live')->get(['id','slug','title','priority']);
        return view('welcome',compact('setting','pages'));
    }

    public function getPage(String $slug)
    {
        $setting = Setting::first();
        $page = Page::where('slug',$slug)->first();
        $pages = Page::where('status','live')->get(['id','slug','title','priority']);
        return view('single-page',compact('page','setting','pages'));
    }
}
