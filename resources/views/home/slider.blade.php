<section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider owl-loaded owl-drag">
                    

               <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-4080px, 0px, 0px); transition: all 0s ease 0s; width: 7140px;">
                    <div class="owl-item cloned" style="width: 1020px;">
               @foreach($sliderdata as $rs)
                    <div class="item item-second">
                         <img src="{{Storage::url($rs->image)}}" style="width: 1020px; height: 1000">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>{{$rs->title}}</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                   </div>
                              </div>
                         </div>
               @endforeach
                    </div></div><div class="owl-item cloned" style="width: 1020px;"><div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Efficient Learning Methods</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div><div class="owl-item" style="width: 1020px;"><div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div><div class="owl-item" style="width: 1020px;"><div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div><div class="owl-item active" style="width: 1020px;"><div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Efficient Learning Methods</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div><div class="owl-item animated owl-animated-out fadeOut cloned" style="width: 1020px; left: 1558px;"><div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div><div class="owl-item cloned" style="width: 1020px;"><div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              </div>
                         </div>
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
          </div>
     </section>