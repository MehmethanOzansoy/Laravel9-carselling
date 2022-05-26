@extends('layouts.frontbase')


@section('title', ' Contact | '. $setting->title)

@section('description', $setting->description)

@section('keywords', $setting->keywords)

@section('content')

<div class="breadcrumb">
     <div class="container">
          <ul class="breadcrumb">
               <li><a href="{{route('home')}}">Home</a></li>
               <li class="active">Contact</a></li>
          </ul>
     </div>
</div>

<section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                         <div class="section-title">
                              <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                              <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                              <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                         </div>

                         <div class="col-md-4 col-sm-12">
                              <input type="submit" class="form-control" name="send message" value="Send Message">
                         </div>

                    </form>
               </div>

               <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                         <img src="{{asset('assets')}}/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                    </div>
               </div>

          </div>
     </div>
</section>

<section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 pull-right col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label class="control-label">Blog Search</label>

                                        <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search for...">
                                             <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button">Go!</button>
                                             </span>
                                        </div>
                                   </div>
                              </form>
                         </div>

                         <br>

                         <label class="control-label">Lorem ipsum dolor sit amet</label>

                         <ul class="list">
                              <li><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing.</a></li>
                              <li><a href="blog-post-details.html">Et animi voluptatem, assumenda enim, consectetur quaerat!</a></li>
                              <li><a href="blog-post-details.html">Ducimus magni eveniet sit doloremque molestiae alias mollitia vitae.</a></li>
                         </ul>
                    </div>

                    <div class="input-checkbox">

                         {!! $setting->contact !!}
                    </div>
                    
               </div>
          </div>
     </section>

    




@endsection