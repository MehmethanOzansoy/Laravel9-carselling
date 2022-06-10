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
                    @include('home.messages')
                    <div class="panel panel-default">
                       
                         <div class="panel-heading">
                              <h4>WRITE YOUR REVIEW</h4>
                         </div>
                         <form action="{{route('storecomment')}}" class="review-form" method="post">
                              @csrf
                              <input type="hidden" name="car_id" class="input" value="{{$data->id}}">
                              <div class="col-sm-12">
                                   <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input type="text" name="subject" class="form-control">
                                   </div>
                              </div>

                              <div class="col-sm-12">
                                   <div class="form-group">
                                        <label class="control-label">Message</label>

                                        <textarea name="review" class="form-control" rows="10" autocomplete="off"></textarea>
                                   </div>
                              </div>
                              <div class="form-group required">
                                   <div class="col-sm-12">
                                        <strong class="text-uppercase">Your Rating: </strong>
                                        <label class="control-label"></label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="star-rating">
                                             <input id="star-5" type="radio" name="rate" value="5" />
                                             <label for="star-5" title="5 stars">★</label>
                                             &nbsp;
                                             <input id="star-4" type="radio" name="rate" value="4" />
                                             <label for="star-4" title="4 stars">★</label>
                                             &nbsp;
                                             <input id="star-3" type="radio" name="rate" value="3" />
                                             <label for="star-3" title="3 stars">★</label>
                                             &nbsp;
                                             <input id="star-2" type="radio" name="rate" value="2" />
                                             <label for="star-2" title="2 stars">★</label>
                                             &nbsp;
                                             <input id="star-1" type="radio" name="rate" value="1" />
                                             <label for="star-1" title="1 star">★</label>
                                        </div>
                                        &nbsp;
                                   </div>
                              </div>

                              <style>
                                   .star-rating {
                                        direction: rtl;
                                        display: inline-block;
                                        padding: 20px;
                                   }

                                   .star-rating input[type=radio] {
                                        display: none;
                                   }

                                   .star-rating label {
                                        color: #bbb;
                                        font-size: 35px;
                                        padding: 0;
                                        cursor: pointer;
                                        -webkit-transition: all .3s ease-in-out;
                                        transition: all .3s ease-in-out;
                                   }

                                   .star-rating label:hover,
                                   .star-rating label:hover~label,
                                   .star-rating input[type=radio]:checked~label {
                                        color: #f2b600;
                                   }
                              </style>
                              @auth
                                   <button type="submit" class="section-btn btn btn-primary">Submit</button>
                              @else
                                   <a href="/login" class="section-btn btn btn-primary">For Submit Your Review,Please Login </a>
                              @endauth



                         </form>
                    </div>

                    <div id="tab2" class="tab-pane fade in">
               <div class="row align-items-center">

                    <div class="col-md-12">
                         <div class="product-reviews">
                         @foreach($reviews as $rs)
                              <div class="single-review">
                                   <div class="review-heading">
                                        <div><a href=""><i class="fa fa-user-o"></i>{{$rs->user->name}}</a></div>
                                        <div><a href=""><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></div>
                                        <div class="review-rating pull-right">
                                             <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                                             <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                                             <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                                             <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                                             <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>

                                        </div>
                                   </div>
                                   <div class="review-body">
                                        <strong>{{$rs->subject}}</strong>
                                        <p>{{$rs->review}}</p>

                                   </div>
                              </div>
                         @endforeach

                         </div>

                    </div>
               </div>
          </div>

               </div>
     





          </div>


     </div>


</section>

@endsection