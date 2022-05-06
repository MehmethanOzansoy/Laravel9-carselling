<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Car::all();

        return view('admin.car.index', [

            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Category::all();

        return view('admin.car.create', [

            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Car();
        $data->category_id =$request->category_id ;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->brand = $request->brand;
        $data->modal = $request->modal;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->gear = $request->gear;
        $data->KM = $request->KM;
        $data->motor_power = $request->motor_power;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car, $id)
    {
        //
        $data = Car::find($id);

        return view('admin.car.show', [

            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car, $id)
    {
        //
        $data = Car::find($id);
        $datalist = Category::all();
        return view('admin.car.edit', [

            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car, $id)
    {
        //
        $data = Car::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0; //$request->user_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->brand = $request->brand;
        $data->modal = $request->modal;
        $data->year = $request->year;
        $data->fuel = $request->fuel;
        $data->gear = $request->gear;
        $data->KM = $request->KM;
        $data->motor_power = $request->motor_power;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car, $id)
    {
        //
        $data = car::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            // ...
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/car');
    }
}
