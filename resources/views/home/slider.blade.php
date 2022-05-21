
<section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider owl-loaded owl-drag">
               @foreach($sliderdata as $rs)  
               
               <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-3512px, 0px, 0px); transition: all 0s ease 0s; width: 6146px;"><div class="owl-item cloned" style="width: 878px;">
               <img src="{{Storage::url($rs->image)}}" style="width: 1920px; height: 700px">   
               <div class="caption">
                              <div class="container">
                              
                                   
                                   <div class="col-md-6 col-sm-12">
                                        <h1>{{$rs->title}}</h1>
                                        <a href="cars.html" class="section-btn btn btn-default">Browse Cars</a>
                                   </div>
                              
                              </div>
                       
                         </div>
               @endforeach
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
          </div>
     </section>