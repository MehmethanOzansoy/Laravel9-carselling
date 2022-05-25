<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view("admin.index"); 
    }

    public function setting()
    {

        $data= Setting::first();
        if ($data==null)
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data= Setting::first();
        }
        return view("admin.setting",['data'=> $data]); 
    }

    public function settingUpdate(Request $request){

        echo "Save Settings";

    }
}
