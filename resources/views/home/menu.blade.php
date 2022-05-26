  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
       <div class="container">

            <div class="navbar-header">
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                      <span class="icon icon-bar"></span>
                 </button>

                 <!-- lOGO TEXT HERE -->
                 <a href="{{route('home')}}" class="navbar-brand">Car Dealer Website</a>
            </div>

            <!-- MENU LINKS -->
            @php

            $mainCategories= \App\Http\Controllers\HomeController::maincategorylist()

            @endphp
            <div class="collapse navbar-collapse">
                 <ul class="nav navbar-nav navbar-nav-first">
                      <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Category <i class="fa fa-list"></i></a>

                           <ul class="dropdown-menu">
                                @foreach($mainCategories as $rs)
                                <li class="dropdown side-dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">{{$rs->title}} <i class="fa fa-angle-right"></i></a>
                                     <div class="custom-menu">
                                          <div class="row">
                                               <div class="col-md-4">
                                                  <ul class="list-links">
                                                       
                                                            @if(count($rs->children))
                                                                 @include('home.categorytree',['children' => $rs->children])
                                                            @endif

                                                  </ul>
                                               </div>
                                          </div>
                                     </div>
                                </li>
                                @endforeach

                           </ul>
                      </li>
                      <li><a href="{{route('home')}}">Home</a></li>
                      <li><a href="{{route('about')}}">About Us</a></li>
                      <li><a href="{{route('faq')}}">FAQ</a></li>
                      <li><a href="{{route('contact')}}">Contact Us</a></li>
                      <li><a href="{{route('references')}}">References</a></li>

                 </ul>
            </div>

       </div>
  </section>