
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
                <a href="index.html" class="ajax logo-holder"><img src="{{('fronted/images/Unico-Global-Logo.png')}}" alt="Unico Global"></a>
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
                        <li><span>01. Call </span> <a href="tel:+4(897)56412322">+4(897)56412322</a></li>
                        <li><span>02. Write </span> <a href="mailto:theside@domain.com">zonar@domain.com</a></li>
                    </ul>
                    <a href="{{url('/contact')}}" class="ajax contacts-btn">Get in touch</a>
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
                        <div class="nav-footer"><span>&#169; Unico Global 2020  /  All rights reserved. </span></div>
                        <div class="nav-holder-wrap_line"></div>
                        <div class="nav-holder-wrap_dec"></div>
                    </div>
                </div>
                <div class="nav-overlay"></div>
                <!-- navigation menu end  -->	
                <!-- content-->    
                <div class="content" data-pagetitle="Blog">
                    <div class="page-scroll-nav psn_single">
                        <!--pagination-->   
                         <!-- paginate.txt -->
                        <!--pagination end-->      
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
                            <div class="bg"  data-bg="{{url('fronted/images/bg/3.jpg')}}"></div>
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
                                  
                                        <div class="section-title">
                                            <h3>Blog Post</h3>
                                        </div>
                                    
                                    <div class="blog-filters fl-wrap">
                                            <div class="blog-search-wrap">
                                                <input name="se" id="se" type="text" class="search" placeholder="Search.." value="" />
                                                <button><i class="fal fa-search"></i></button>
                                            </div>
                                            <!-- filter tag   -->
                                        <div class="tag-filter blog-btn-filter">

                                            <div class="blog-btn">Tags <i class="fa fa-tags" aria-hidden="true"></i></div>
                                                    <ul>   
                                                       
                                                        
                                                        @foreach ($TagAll  as $taga)
                                                            <li><a href="post/tag/{{$taga->slug}}">{{$taga->name}}</a></li>
                                                        @endforeach    
                                                    </ul>
                                            </div>
                                            <!-- filter tag end  -->
                                            <!-- filter category    -->
                                        
                                                <div class="category-filter blog-btn-filter">
                                                    <div class="blog-btn">Categories <i class="fa fa-list-ul" aria-hidden="true"></i></div>
                                                        <ul>
                                                          @foreach ($categoryAll  as $cat)
                                                                <li><a href="post/category/{{$cat->slug}}" >{{$cat->name}}</a></li>
                                                            @endforeach 
                                                        </ul>
                                                    </div>
                                        
                                            <!-- filter category end  --> 
                                    </div>  
                                    <!-- portfolio start -->
                                                                                
                                         <div class="gallery-items big-pad  two-column  fl-wrap  ">
                                                <!-- gallery-item-->
                                               @foreach ($posts as $post)
                                                    <div class="gallery-item">
                                                        <div class="grid-item-holder hov_zoom">
                                                            <div class="grid-post-media fl-wrap">
                                                            <a href="{{route('post',$post->slug)}}" class="ajax"><img  src="{{ URL::to('/') }}/images/{{ $post->image }}"    alt=""></a>
                                                                <div class="post-det-num">{{$loop->index+1}}</div>
                                                            </div>
                                                            <div class="post-det fl-wrap">
                                                                <h3><a href="{{route('post',$post->slug)}}" class="ajax">{{$post->title}}</a></h3>
                                                                <div class="post-header fl-wrap"> <span> {{$post->created_at->isoFormat('Do MMM YYYY')}}</span> 
                                                                    @foreach ($post->categories as $category)
                                                                   
                                                                       <a href="#">{{$category->name}}</a>
                                                                    @endforeach
                                                                 
                                                                </div>   
                                                                
                                                                <p
                                                               
                                                                >{!! substr(html_entity_decode($post->body), 0, 200) !!}</p>
                                                               

                                                                
                                                                <a href="{{route('post',$post->slug)}}" class="ajax post-link">Read More <i class="fal fa-long-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="pr-bg"></div>
                                                        </div>          
                                                @endforeach     
                                                
                                            </div>
                                    <!-- portfolio end -->                                                             
                                </div>
                                <div class="section-number"> <span>0</span>1</div>
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
        <!-- Main end -->
        @endsection

