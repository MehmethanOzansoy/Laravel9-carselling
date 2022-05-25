<section id="home">
     <div class="image">
          <div class="owl-carousel owl-theme home-slider owl-loaded owl-drag">
               @foreach($sliderdata as $rs)
               <div class="carousel-item">
                    <img src="{{Storage::url($rs->image)}}" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                         <h1>{{$rs->title}}</h1>
                         <h3>{{$rs->description}}</h3>
                         <p> <a href="{{route('car',['id'=>$rs->id])}}" class="section-btn btn btn-default">Browse Cars</a></p>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>