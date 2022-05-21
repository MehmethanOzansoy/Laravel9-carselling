 @extends('layouts.frontbase')

 @section('title', 'Car Selling')


 @section('content')
 <main>
     <section>

         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12">
                     <div class="section-title text-center">
                         <h2>Featured Cars <small>Lorem ipsum dolor sit amet.</small></h2>
                     </div>
                 </div>
                 @foreach($carlist1 as $rs)  
                 <div class="col-md-4 col-sm-4">
                     <div class="courses-thumb courses-thumb-secondary">
                         <div class="courses-top">
                             <div class="courses-{{asset('assets')}}/image">
                                 <img src="{{Storage::url($rs->image)}}" class="img-responsive" alt="">
                             </div>
                             <div class="courses-date">
                                <span title="Author"><i class="fa fa-dashboard"></i> {{$rs->title}}</span>
                                 <span title="Author"><i class="fa fa-cube"></i>{{$rs->motor_power}}</span>
                                 <span title="Views"><i class="fa fa-cog"></i> {{$rs->gear}}</span>
                             </div>
                         </div>

                         <div class="courses-detail">
                             <h3><a href="car-details.html">{{$rs->modal}}</a></h3>

                             <p class="lead"><small><del>{{$rs->price}}</del></small> <strong>{{$rs->price *1.12}}</strong></p>

                             <p>{{$rs->motor_power}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->fuel}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->year}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->brand}}</p>
                         </div>

                         <div class="courses-info">
                             <a href="car-details.html" class="section-btn btn btn-primary btn-block">View More</a>
                         </div>
                     </div>
                 </div>
                @endforeach
             </div>
         </div>
     </section>

     <section>
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12">
                     <div class="section-title text-center">
                         <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-4">
                     <div class="courses-thumb courses-thumb-secondary">
                         <div class="courses-top">
                             <div class="courses-{{asset('assets')}}/image">
                                 <img src="{{asset('assets')}}/images/blog-1-720x480.jpg" class="img-responsive" alt="">
                             </div>
                             <div class="courses-date">
                                 <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                 <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                 <span title="Views"><i class="fa fa-eye"></i> 114</span>
                             </div>
                         </div>

                         <div class="courses-detail">
                             <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                         </div>

                         <div class="courses-info">
                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-4">
                     <div class="courses-thumb courses-thumb-secondary">
                         <div class="courses-top">
                             <div class="courses-{{asset('assets')}}/image">
                                 <img src="{{asset('assets')}}/images/blog-2-720x480.jpg" class="img-responsive" alt="">
                             </div>
                             <div class="courses-date">
                                 <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                 <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                 <span title="Views"><i class="fa fa-eye"></i> 114</span>
                             </div>
                         </div>

                         <div class="courses-detail">
                             <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                         </div>

                         <div class="courses-info">
                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-4 col-sm-4">
                     <div class="courses-thumb courses-thumb-secondary">
                         <div class="courses-top">
                             <div class="courses-{{asset('assets')}}/image">
                                 <img src="{{asset('assets')}}/images/blog-3-720x480.jpg" class="img-responsive" alt="">
                             </div>
                             <div class="courses-date">
                                 <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                 <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                 <span title="Views"><i class="fa fa-eye"></i> 114</span>
                             </div>
                         </div>

                         <div class="courses-detail">
                             <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                         </div>

                         <div class="courses-info">
                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>



     <section id="testimonial">
         <div class="container">
             <div class="row">

                 <div class="col-md-12 col-sm-12">
                     <div class="section-title text-center">
                         <h2>Testimonials <small>from around the world</small></h2>
                     </div>

                     <div class="owl-carousel owl-theme owl-client">
                         <div class="col-md-4 col-sm-4">
                             <div class="item">
                                 <div class="tst-{{asset('assets')}}/image">
                                     <img src="{{asset('assets')}}/images/tst-{{asset('assets')}}/image-1-200x216.jpg" class="img-responsive" alt="">
                                 </div>
                                 <div class="tst-author">
                                     <h4>Jackson</h4>
                                     <span>Shopify Developer</span>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                 <div class="tst-rating">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                             <div class="item">
                                 <div class="tst-{{asset('assets')}}/image">
                                     <img src="{{asset('assets')}}/images/tst-{{asset('assets')}}/image-2-200x216.jpg" class="img-responsive" alt="">
                                 </div>
                                 <div class="tst-author">
                                     <h4>Camila</h4>
                                     <span>Marketing Manager</span>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                 <div class="tst-rating">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                             <div class="item">
                                 <div class="tst-{{asset('assets')}}/image">
                                     <img src="{{asset('assets')}}/images/tst-{{asset('assets')}}/image-3-200x216.jpg" class="img-responsive" alt="">
                                 </div>
                                 <div class="tst-author">
                                     <h4>Barbie</h4>
                                     <span>Art Director</span>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                 <div class="tst-rating">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                             </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                             <div class="item">
                                 <div class="tst-{{asset('assets')}}/image">
                                     <img src="{{asset('assets')}}/images/tst-{{asset('assets')}}/image-4-200x216.jpg" class="img-responsive" alt="">
                                 </div>
                                 <div class="tst-author">
                                     <h4>Andrio</h4>
                                     <span>Web Developer</span>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                 <div class="tst-rating">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                 </div>
                             </div>
                         </div>

                       

                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section>
                             <div class="container">
                                 <div class="row">
                                     <div class="col-md-12 col-sm-12">
                                         <div class="text-center">
                                             <h2>About us</h2>

                                             <br>

                                             <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias
                                                 ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex.
                                                 Totam assumenda impedit aut eum, illum distinctio saepe explicabo.
                                                 Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam,
                                                 fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid,
                                                 pariatur enim nisi. Quia ab iusto assumenda.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
 </main>
 @endsection