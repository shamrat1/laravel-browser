<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('status','!=','deleted')->latest()->paginate(20);
        return view('admin.page.index',compact('pages'));
    }

    public function create()
    {
        $page = null;
        return view('admin.page.create-edit',compact('page'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'name' => 'required|string',
            'title' => 'required|string',
            'priority' => 'required|numeric'
        ]);
        Page::create([
            'name' => ucwords($request->name),
            'title' => ucwords($request->title),
            'slug' => str_replace(" ","_",$request->title)."_".now()->format('dmyhis'),
            'description' => $request->description ?? '',
            'status' => $request->status ?? 'drafted',
            'priority' => $request->priority,
            'meta_key' => $request->meta_key ?? '',
            'meta_description' => $request->meta_description ?? ''
        ]);
        return redirect()->route('admin.page.index');
    }

    public function edit(Page $page)
    {
        return view('admin.page.create-edit',compact('page'));
    }

    public function update(Request $request,Page $page)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'title' => 'required|string',
            'priority' => 'required|numeric'
        ]);
        $page->update([
            'name' => ucwords($request->name),
            'title' => ucwords($request->title),
            'slug' => str_replace(" ","_",$request->title)."_".now()->format('dmyhis'),
            'description' => $request->description ?? '',
            'status' => $request->status ?? 'drafted',
            'priority' => $request->priority,
            'meta_key' => $request->meta_key ?? '',
            'meta_description' => $request->meta_description ?? ''
        ]);
        return redirect()->route('admin.page.index');

    }

    public function delete(Request $request,Page $page)
    {
        $page->update([
            'status' => 'deleted'
        ]);
        return redirect()->back();
    }
}
