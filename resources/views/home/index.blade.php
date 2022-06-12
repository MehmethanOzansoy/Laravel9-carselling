 @extends('layouts.frontbase')

 @section('title', $setting->title)

 @section('description', $setting->description)

 @section('keywords', $setting->keywords)

 @section('icon', Storage::url($setting->icon))


 @section('slider')

 @include('home.slider')

 @endsection


 @section('content')
 <main>
     <section>

         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-sm-12">
                     <div class="section-title text-center">
                         <h2>Öne Çıkan Arabalar <small>New thinking new possibilities</small></h2>
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

                             <p class="lead"><small><del>{{$rs->price *1.12}}₺</del></small> <strong>{{$rs->price}}₺</strong></p>

                             <p>{{$rs->motor_power}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->fuel}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->year}} &nbsp;&nbsp;/&nbsp;&nbsp; {{$rs->brand}}</p>
                         </div>
                         @php

                         $average = $rs->comment->average('rate');

                         @endphp
                         {{number_format($average,2)}}
                         <div class="col-md-4 col-sm-4">
                            <div class="tst-rating">
                                <i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<2) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<3) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<4) -o empty @endif"></i>
                                <i class="fa fa-star @if ($average<5) -o empty @endif"></i>
                            </div>
                         </div>

                         /{{$rs->comment->count('id')}}
                         <div class="courses-info">
                             <a href="{{route('car',['id'=>$rs->id])}}" class="section-btn btn btn-primary btn-block">View More</a>
                         </div>

                     </div>
                 </div>
                 @endforeach
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
                         <h2>Gelişmeler</h2>

                         <br>

                         <p class="lead">Volkswagen bugün ID.4 elektrikli SUV modelinin yeni bir dört tekerlekten çekişli versiyonunu duyurdu. ID.4 Pro 4Motion adı verilen model, tıpkı ID.4 GTX gibi çift motora sahip ancak güç tarafında biraz daha mütevazı.

                         Yeni Volkswagen ID.4 Pro 4Motion'ın arka aksında bulunan motor 204 PS güç üretiyor. Ekstra güç ve çekiş gereken durumlarda devreye giren ön akstaki motor ise 109 PS güce sahip. İki motor birlikte 265 PS güç sunuyor ki bunun GTX versiyonuna göre 34 PS daha düşük olduğunu söylemek mümkün. 0-100 km/s hızlanmasını 6.9 saniyede tamamlayan modelin azami hızı da 180 km/s ile sınırlandırılmış.</p>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
 @endsection