
@extends('website.template.master')

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
                <a href="index.html" class="ajax logo-holder"><img src="images/Unico-Global-Logo.png" alt="Unico Global"></a>
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
                        <li><span>01. Call </span> <a href="tel:+917304658682">+91 7304658682</a></li>
                        <li><span>02. Write </span> <a href="mailto:business@unicoglobal.in">business@unicoglobal.in</a></li>
                    </ul>
                    <a href="contacts.html" class="ajax contacts-btn">Get in touch</a>
                </div>
                <!-- header-contacts end-->
            </header>
            <!-- header end-->
            <!-- left-header-->
            <aside class="left-header">
                <span class="lh_dec color-bg"></span>
                <div class="left-header_social">
                    <ul >
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </aside>
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
                <div class="content full-height" data-pagetitle="Home">
                    <div class="fl-wrap full-height hero-conatiner">
                        <div class="hero-wrapper fl-wrap full-height hidden-item">
                            <span class="hc_dec"></span>
                            <!-- fs-slider-wrap  -->
                            <!-- hero-slider-wrap -->
                            <div class="hero-slider-wrap home-half-slider fl-wrap full-height">
                                <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper" >
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="half-hero-wrap">
                                                    <div class="hhw_header">Grow and Enhance Your Business With Us!</div>
                                                    <h1><span> Unico Global - </span><br> Your Virtual Partner</h1>
                                                    <h4></h4>
                                                    <div class="clearfix"></div>
                                                    <a href="portfolio.html" class="btn ajax  fl-btn color-bg"><span>OUR PORTFOLIO</span></a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="half-hero-wrap">
                                                    <div class="hhw_header">AUGMENTED REALITY & VIRTUAL REALITY</div>
                                                    <h1><span>Immersive Experience</span><br> of the <span>Virtual World</span> <br> Like Never Before!</h1>
                                                    
                                                    <div class="clearfix"></div>
                                                    <a href="portfolio-single.html" class="btn ajax  fl-btn color-bg"><span>OUR SERVICES</span></a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="half-hero-wrap">
                                                    <div class="hhw_header">Website and Mobile Application</div>
                                                    <h1><span>Tailor-Made</span> Web &<br> Mobile Apps with<br> <span>High Quality Code.</span></h1>
                                                    <h4> </h4>
                                                    <div class="clearfix"></div>
                                                    <a href="portfolio.html" class="btn  ajax  fl-btn color-bg"><span>VIEW PROJECT</span></a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                            <!-- swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="half-hero-wrap">
                                                    <div class="hhw_header">UI / UX Design</div>
                                                    <h1><span>Bespoke</span> Interface With <br><span>Stunning</span> User Experience.</h1>
                                                    <div class="clearfix"></div>
                                                    <a href="about.html" class="btn ajax  fl-btn color-bg"><span>DESIGN NOW</span></a>
                                                </div>
                                            </div>
                                            <!-- swiper-slide end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hero-slider-wrap  end-->
                            <!-- hero-slider-img-->
                            <div class="hero-slider-img hero-slider-wrap_halftwo hidden-item">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" >
                                        <div class="swiper-slide">
                                            <div class="bg"  data-bg="{{url('fronted/images/bg/10.jpg')}}" data-swiper-parallax="20%"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="bg"  data-bg="{{url('fronted/images/bg/7.jpg')}}" data-swiper-parallax="20%"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="bg"  data-bg="{{url('fronted/images/bg/8.jpg')}}" data-swiper-parallax="20%"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="bg"  data-bg="{{url('fronted/images/bg/13.jpg')}}" data-swiper-parallax="20%"></div>
                                            <div class="overlay"></div>
                                        </div>
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                                <div class="hero-corner-dec"></div>
                                <div class="hero-corner-dec2"></div>
                            </div>
                            <!-- hero-slider-img  end-->
                            <!-- slider-controls -->
                            <div class="slider-progress-bar">
                                <span>
                                    <svg class="circ" width="50" height="50">
                                        <circle class="circ2" cx="25" cy="25" r="23" stroke="rgba(255,255,255,0.4)" stroke-width="1" fill="none"/>
                                        <circle class="circ1" cx="25" cy="25" r="23" stroke="#fff" stroke-width="2" fill="none"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="clone-counter">
                                <div class="current">01</div>
                            </div>
                            <div class="swiper-counter hs_counter">
                                <div class="current">01</div>
                                <div class="total"></div>
                            </div>
                            <div class="hero-slider_control-wrap">
                                <div class="hsc hsc-prev"><span><i class="fal fa-angle-left"></i></span> </div>
                                <div class="hsc hsc-next"><span><i class="fal fa-angle-right"></i></span></div>
                            </div>
                            <!-- slider-controls end-->
                            <a href="about.html" class="ajax start-btn"><span> Start explore <i class="fal fa-long-arrow-right"></i></span></a>
                            <div class="play-pause_slider hsc_pp auto_actslider"><i class="fas fa-play"></i></div>
                        </div>
                        <!-- hero-container end-->
                        <div class="hero-decor-numb"><span>19.213023   </span><span>72.867844 </span> <a href="https://goo.gl/maps/34mwiUq9aQRb4kkN6" target="_blank" class="hero-decor-numb-tooltip">Based In Mumbai</a></div>
                        <div class="hero-slider-wrap_pagination"></div>
                        <div class="hero-scroll-down-notifer">
                            <div class="scroll-down-wrap ">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                            <i class="far fa-angle-down"></i>
                        </div>
                    </div>
                </div>
                <!-- content end -->
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