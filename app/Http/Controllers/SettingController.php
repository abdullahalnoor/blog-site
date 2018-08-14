<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function viewSetting(){
        return view('admin.setting.setting')->with('setting',Setting::first());
    }

    public function updateSetting(Request $request){
        $setting = Setting::first();

        $setting->site_name = $request->site_name;
        $setting->contact_number = $request->contact_number;
        $setting->contact_email = $request->contact_email;
        $setting->contact_address = $request->contact_address;
        $setting->save();
        return back();
    }

}
