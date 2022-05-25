@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')

<section>
     <div id="breadcrumb">
          <div class="container">
               <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">Car</a></li>
                    <li><a href="#">{{$data->title}}</a></li>
               </ul>
          </div>
     </div>
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-xs-12">
                    <div>
                         <img src="{{Storage::url($data->image)}}" alt="" class="img-responsive wc-image">
                    </div>
                    <br>

                    <div class="row">
                         @foreach($images as $rs)
                         <div class="col-sm-4 col-xs-6">
                              <div>
                                   <img src="{{Storage::url($rs->image)}}" alt="" class="img-responsive">
                              </div>

                              <br>
                         </div>

                         @endforeach
                    </div>
               </div>
                   
                    <div class="col-md-6 col-xs-12">
                              <form action="#" method="post" class="form">
                                   <h2>{{$data->brand}}</h2>

                                   <p class="lead">{{$data->description}}</p>

                                   <p class="lead"><small><del> {{$data->price*1.15}}₺</del></small> <strong class="text-primary">{{$data->price}}₺</strong></p>

                                   <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Type</span>

                                                  <br>

                                                  <strong>{{$data->keywords}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Brand</span>

                                                  <br>

                                                  <strong>{{$data->brand}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span> Model</span>

                                                  <br>

                                                  <strong>{{$data->modal}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>First registration</span>

                                                  <br>

                                                  <strong>{{$data->year}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Mileage</span>

                                                  <br>

                                                  <strong>5000 km</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Fuel</span>

                                                  <br>

                                                  <strong>{{$data->fuel}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Engine size</span>

                                                  <br>

                                                  <strong>{{$data->motor_power}}</strong>
                                             </p>
                                        </div>

                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Power</span>

                                                  <br>

                                                  <strong>85 hp</strong>
                                             </p>
                                        </div>


                                        <div class="col-md-4 col-sm-6">
                                             <p>
                                                  <span>Gearbox</span>

                                                  <br>

                                                  <strong>Manual</strong>
                                             </p>
                                        </div>
                                   </div>
                              </form>
               </div>
                    
          </div>
               <div class="row">
                    <div class="col-lg-8 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Vehicle Description</h4>
                              </div>

                              <div class="panel-body">
                                   <p>{!!$data->detail !!}</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 col-xs-12">
                         <div class="panel panel-default">
                              <div class="panel-heading">
                                   <h4>Contact Details</h4>
                              </div>

                              <div class="panel-body">
                                   <p>
                                        <span>Name</span>

                                        <br>

                                        <strong>John Smith</strong>
                                   </p>

                                   <p>
                                        <span>Phone</span>

                                        <br>

                                        <strong><a href="tel:123-456-789">123-456-789</a></strong>
                                   </p>


                                   <p>
                                        <span>Mobile phone</span>

                                        <br>

                                        <strong><a href="tel:456789123">456789123</a></strong>
                                   </p>

                                   <p>
                                        <span>Email</span>

                                        <br>

                                        <strong><a href="mailto:john@carsales.com">john@carsales.com</a></strong>
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
</section>

@endsection