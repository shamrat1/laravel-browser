<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Traits\ImageOperations;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageOperations;

    public function index()
    {
        $setting = Setting::first();
        return view('admin.setting.index',compact('setting'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'site_name' => 'required|string',
            'site_description' => 'nullable|string',
            'number_of_windows' => 'required|numeric'
        ]);
        $data = $request->all();
        if($request->hasFile('logo')){
            $data['site_logo'] = $this->saveImage('site_logo',$request->logo,'logo');
        }else{
            $data['site_logo'] = 'https://via.placeholder.com/600/92c952';
        }
        Setting::firstOrCreate([
            'id' => $request->id
        ],$data);
        return redirect()->back();
    }
}
