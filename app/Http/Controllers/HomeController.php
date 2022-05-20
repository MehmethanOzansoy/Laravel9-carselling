<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $sliderdata=Car::limit(4)->get();
        return view('home.index',[
            'sliderdata' =>$sliderdata
        ]);
    }
}
