@extends('layouts.frontbase')

@section('title',$category->title .' Cars')

@section('content')

<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">{{$category->title}}</li>
        </ul>
    </div>

</div>
<section>
          <div class="container">
               <div class="text-center">
                    <h1>Araç Listesi</h1>

                    <br>

                    <p class="lead">En güvenilir ve en ucuz 2. el araç satış sitesi</p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">

               <div class="row">
                    <div class="col-lg-3 col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label>Used/New:</label>

                                        <select class="form-control">
                                             <option value="">All</option>
                                             <option value="new">New vehicle</option>
                                             <option value="used">Used vehicle</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Vehicle Type:</label>

                                        <select class="form-control">
                                             <option value="">--All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Make:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Model:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Price:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Mileage:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Engine size:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Power:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Fuel:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Gearbox:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Doors:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <div class="form-group">
                                        <label>Number of seats:</label>
                                        
                                        <select class="form-control">
                                             <option value="">-- All --</option>
                                             <option value="">option 1</option>
                                             <option value="">option 2</option>
                                             <option value="">option 3</option>
                                             <option value="">option 4</option>
                                        </select>
                                   </div>

                                   <button type="submit" class="section-btn btn btn-primary btn-block">Search</button>
                              </form>
                         </div>
                    </div>
                    @foreach($cars as $rs)  
                        <div class="col-lg-9 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="courses-thumb courses-thumb-secondary">
                                            <div class="courses-top">
                                                <div class="courses-image">
                                                    <img src="{{Storage::url($rs->image)}}" class="img-responsive" alt="">
                                                </div>
                                                <div class="courses-date">
                                                    <span title="Author"><i class="fa fa-dashboard"></i> 130 000km</span>
                                                    <span title="Author"><i class="fa fa-cube"></i> {{$rs->motor_power}}</span>
                                                    <span title="Views"><i class="fa fa-cog"></i>{{$rs->gear}}</span>
                                                </div>
                                            </div>

                                            <div class="courses-detail">
                                                <h3><a href="car-details.html"> {{$rs->brand}}</a></h3>

                                                <p class="lead"><small><del> {{$rs->price *1.12}}</del></small> <strong>{{$rs->price}}₺</strong></p>

                                                <p>{{$rs->motor_power}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->fuel}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->year}} &nbsp;&nbsp;/&nbsp;&nbsp; Used vehicle</p>
                                            </div>

                                            <div class="courses-info">
                                                <a href="{{route('car',['id'=>$rs->id])}}" class="section-btn btn btn-primary btn-block">View More</a>
                                            </div>
                                    </div>
                                </div>
                    @endforeach
                         </div>
                    </div>
               </div>
          </div>
     </section>
@endsection