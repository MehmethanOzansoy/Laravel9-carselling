<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Car::limit(2)->get();
        $carlist1=Car::limit(6)->get();
        return view('home.index',[
            'sliderdata' =>$sliderdata,
            'carlist1' =>$carlist1
        ]);
    }

    public function car($id)
    {
        $data = Car::find($id);
        return view('home.car',[
            'data' =>$data  
        ]);
    }

}
