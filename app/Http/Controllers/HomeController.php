<?php

namespace App\Http\Controllers;

use App\Models\Car;
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
        return view('home.index',[
            'page'=>$page,
            'sliderdata' =>$sliderdata,
            'carlist1' =>$carlist1
        ]);
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

}
