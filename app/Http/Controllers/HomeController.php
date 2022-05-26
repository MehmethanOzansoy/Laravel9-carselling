<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public static function maincategorylist()
    {

        return Category::where('parent_id','=',0)->with('children')->get();
    }
    //
    public function index()
    {
        $page='home';
        $sliderdata=Car::limit(2)->get();
        $carlist1=Car::limit(6)->get();
        $setting= Setting::first();

        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata' =>$sliderdata,
            'carlist1' =>$carlist1
        ]);
    }
    public function about()
    {
       
        $setting= Setting::first();

        return view('home.about',[

            'setting'=>$setting,

        ]);
    }
    public function contact()
    {
       
        $setting= Setting::first();

        return view('home.contact',[

            'setting'=>$setting,

        ]);
    }
    public function references()
    {
       
        $setting= Setting::first();

        return view('home.references',[

            'setting'=>$setting,

        ]);
    }

    public function storemessage(Request $request)
    {
      
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info'.'Your message has been sent ,Thank You.');
    }

    public function car($id)
    {
        $data = Car::find($id);
        $images = DB::table('images')->where('car_id',$id)->get();

        return view('home.car',[
            'data' =>$data, 
            'images' =>$images  

        ]);
    }

    public function categorycars($id)
    {
       

        $category = category::find($id);
        $cars = DB::table('cars')->where('category_id',$id)->get();

        return view('home.categorycar',[
            'category' =>$category, 
            'cars' =>$cars  

        ]);
    }

}
