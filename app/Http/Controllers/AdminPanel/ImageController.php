<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cid)
    {
        //
        $car = Car::find($cid);
        //$images = Image::where('car_id',$cid);//
        $images = DB::table('images')->where('car_id',$cid)->get();
        return view('admin.image.index', [

            'car' => $car,
            'images' => $images
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$cid)
    {
        //
        $data = new Image();
        $data->car_id = $cid;
        $data->title = $request->title;

        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
            
        }
        $data->save();
        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$cid ,$id)
    {
        //
        $data = car::find($id);
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/image');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid,$id)
    {
        //
        $data = Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            // ...
            Storage::delete($data->image);
        }
        $data->delete();
        
        return redirect()->route('admin.image.index',['cid'=>$cid]);
    }
}
