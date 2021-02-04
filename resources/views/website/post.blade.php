@extends('website.template.layout')
  
@section('content')  
        <!-- loader   -->
        <div class="loader">
            <div class="loading-text-container "><span class="loading-text">Load<strong>ing</strong></span> <span class="loader_count">0</span></div>
            <div class="loader-anim"></div>
            <div class="loader-anim2 color-bg"></div>
        </div>
        <!-- loader  end-->
        <!-- main start  -->
        <div id="main">
            <!-- header--> 
            <header class="main-header">
                <!-- logo  -->
              
                <!-- logo end -->
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="ncs"></span>
                    <span class="nos"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text">Menu</div>
                </div>
                <!-- nav-button-wrap end--> 
                <!-- header-contacts--> 
                <div class="header-contacts">
                    <ul>
                        <li><span>01. Call </span> <a href="tel:+564566565">+564566565</a></li>
                        <li><span>02. Write </span> <a href="mailto:theside@domain.com">abc@domain.com</a></li>
                    </ul>
                    <a href="contacts.html" class="ajax contacts-btn">Get in touch</a>
                </div>
                <!-- header-contacts end--> 
            </header>
            <!-- header end--> 
            <!-- left-header-->      
              @include('website.template.icons')
            <!-- left-header end--> 
            <!-- share button--> 
            <div class="share-btn showshare color-bg"><span>Share <i class="fal fa-plus"></i></span></div>
            <!-- share button end--> 
            <!-- right header--> 
            <div class="hc_dec_color">
                <div class="page-subtitle"><span></span></div>
            </div>
            <!-- right header end--> 
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- navigation menu-->	
                <div class="nav-holder">
                    <div class="nav-holder-wrap but-hol">
                        <div class="nav-container fl-wrap">
                            <!-- nav -->
                            @include('website.template.nav')
                           
                            <!-- nav end-->
                        </div>
                        <div class="nav-footer"><span>&#169; Zonar 2020  /  All rights reserved. </span></div>
                        <div class="nav-holder-wrap_line"></div>
                        <div class="nav-holder-wrap_dec"></div>
                    </div>
                </div>
                <div class="nav-overlay"></div>
                <!-- navigation menu end  -->	
                <!-- content-->    
                <div class="content" data-pagetitle="Blog single">
                    <div class="page-scroll-nav psn_single">
                        <!--content-nav_holder-->            
                        <div class="content-nav_holder">
                            <div class="content-nav">
                                <ul>
                                    <li>
                                        <a href="portfolio-single2.html" class="ln ajax"><i class="fal fa-long-arrow-left"></i><span>Prev <strong>- Post Title</strong></span></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="{{url('fronted/images/folio/5.jpg')}}"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="portfolio-single3.html" class="rn ajax"><span >Next <strong>- Post Title</strong></span> <i class="fal fa-long-arrow-right"></i></a>
                                        <div class="content-nav-media">
                                            <div class="bg"  data-bg="{{url('fronted/images/folio/8.jpg')}}"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--content-nav_holder end -->   
                    </div>
                    <!-- hero-section-dec-->                  
                    <div class="hero-section-dec color-bg">
                        <div class="progress-indicator">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="-1 -1 34 34">
                                <circle cx="16" cy="16" r="15.9155"
                                    class="progress-bar__background" />
                                <circle cx="16" cy="16" r="15.9155"
                                    class="progress-bar__progress 
                                    js-progress-bar" />
                            </svg>
                        </div>
                    </div>
                    <!-- hero-section-dec end--> 
                    <!--fixed-column-wrap-->
                    <div class="fixed-column-wrap">
                        <div class="pr-bg"></div>
                        <!--fixed-column-wrap-content-->
                        <div class="fixed-column-wrap-content">
                            <div class="bg"  data-bg="{{url('fronted/images/bg/7.jpg')}}"></div>
                            <div class="overlay"></div>
                            <div class="progress-bar-wrap bot-element">
                                <div class="progress-bar"></div>
                            </div>
                            <!--fixed-column-wrap_title-->
                            <div class="fixed-column-wrap_title first-tile_load">
                                <h2>Last News <br>And Updates</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                            </div>
                            <!--fixed-column-wrap_title end-->
                            <div class="fixed-column-dec"></div>
                            <div class="fixed-column-linedec"></div>
                            <div class="scroll-notifer">Scroll Down  </div>
                        </div>
                        <!--fixed-column-wrap-content end-->                                     
                    </div>
                    <!--fixed-column-wrap end-->
                    <!--column-wrap--> 
                    <div class="column-wrap">
                        <!--column-wrap-container -->   
                        <div class="column-wrap-container fl-wrap">
                            <div class="col-wc_dec"></div>
                            <section class="scroll_sec" id="sec1">
                                <div class="container">
                                    <div class="section-title fl-wrap">
                                        
                                        <h3> {!! html_entity_decode($post->title) !!}</h3>
                                        <ul class="blog-title-opt  fl-wrap">
                                            <li><a href="#">
                                                {{$post->created_at->isoFormat('Do MMM YYYY')}}
                                                </a></li>
                                            <li> - </li>
                                             @foreach ($post->categories as $category)
                                              <li><a href="#">{{$category->name}}</a></li>
                                             @endforeach
                                            {{-- <li> - </li> --}}
                                            {{-- <li><a href="#"><span class="author_avatar"> <img alt='' src='{{url("fronted/images/avatar/3.jpg")}}'></span>Jane Kowalski</a></li> --}}
                                        </ul>
                                    </div>
                                    <!-- blog media -->
                                    <div class="blog-media fl-wrap">
                                        <div class="single-slider-wrap">
                                            <div class="single-slider fl-wrap">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper lightgallery">
                                                        @foreach(explode(',', $post->gallry) as $info)
                                                          <div class="swiper-slide hov_zoom"><img src="{{ URL::to('/') }}/gallry/{{ $info}}" alt="">
                                                            <a href="{{ URL::to('/') }}/gallry/{{ $info}}" class="box-media-zoom   popup-image">
                                                                <i class="fal fa-search"></i></a>
                                                       </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="ss-slider-pagination_wrap">
                                                <div class="ss-slider-pagination"></div>
                                            </div>
                                            <div class="ss-slider-cont ss-slider-cont-prev"><i class="fal fa-angle-left"></i></div>
                                            <div class="ss-slider-cont ss-slider-cont-next"><i class="fal fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                    <!-- blog media end -->                                    
                                    <div class="fl-wrap text-block">
                                        <div class="pr-tags">
                                            <span>Tags : </span>
                                            <ul>
                                               @foreach ($post->tags as $tag)
                                                  <li><a href="#">{{$tag->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="rm">
                                            {!! html_entity_decode($post->body) !!}
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <div class="section-number"> <span>0</span>1. </div>
                            </section>
                            <!--section end-->                 
                        </div>
                        <!--column-wrap-container end -->          
                    </div>
                    <!--column-wrap end-->    
                    <div class="to-top-btn to-top"><i class="fal fa-long-arrow-up"></i></div>
                </div>
                <!-- content end--> 
                <div class="hero-scroll-down-notifer">
                    <div class="scroll-down-wrap ">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                    <i class="far fa-angle-down"></i>
                </div>
                <!-- share-wrapper-->
                <div class="share-wrapper">
                    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
                <!-- share-wrapper  end -->						
            </div>
            <!-- wrapper end -->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
       
        @endsection


        