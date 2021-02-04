


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
               <li><span>01. Call </span> <a href="tel:+6555555">+4(6552)56412322</a></li>
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
               <div class="nav-footer"><span>&#169;  2020  /  All rights reserved. </span></div>
               <div class="nav-holder-wrap_line"></div>
               <div class="nav-holder-wrap_dec"></div>
            </div>
         </div>
         <div class="nav-overlay"></div>
         <!-- navigation menu end  -->	
         <div class="content full-height no-mob-hidden2" data-pagetitle="Contacts">
            <div class="content-inner">
               <div class="content-front">
                  <div class="cf-inner">
                     <div class="contact-details-title fl-wrap">
                        <h2>Contact Detais</h2>
                     </div>
                     <div class="contact-details fl-wrap">
                        <ul>
                           <li><span>01. Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                           <li><span>02. Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                           <li><span>03. Phone :</span><a href="#">+7(111)123456789</a> , <a href="#">+8(222)987654321</a></li>
                        </ul>
                     </div>
                     <a href="#" class="btn fl-btn color-bg show_contact-form"><span>Say Hello</span></a> 
                     <div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i></div>
                  </div>
               </div>
               <div class="content-back">
                  <div class="hidden-contact_form-wrap_inner" tabindex="0" style="overflow: hidden; outline: none;">
                     <div class="close-contact_form cnt-anim"><i class="fal fa-times"></i></div>
                     <div class="contact-details-title fl-wrap">
                        <h2>Get in Touch</h2>
                     </div>
                     <div id="contact-form" class="fl-wrap">
                        <div id="message"></div>
                        <form class="custom-form" action="http://zonar.kwst.net/php/contact.php" name="contactform" id="contactform">
                           <fieldset>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <input type="text" name="name" id="name" placeholder="Your Name *" value="">
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="text" name="email" id="email" placeholder="Email Address *" value="">
                                 </div>
                              </div>
                              <textarea name="comments" id="comments" cols="40" rows="3" placeholder="Your Message:" class="cnt-anim"></textarea>
                              <button class="btn fl-btn color-bg" id="submit"><span>Send Message</span> </button>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               <div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr" style="width: 0px; z-index: 21; cursor: default; position: absolute; top: 0px; left: 500px; height: 407px; touch-action: none; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 0px; height: 0px; background-color: rgb(66, 66, 66); border: none; background-clip: padding-box; border-radius: 0px; touch-action: none;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 0px; z-index: 21; top: 407px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 0px; width: 0px; background-color: rgb(66, 66, 66); border: none; background-clip: padding-box; border-radius: 0px; left: 0px;"></div></div></div>
               
            </div>
            <div class="map-container">
               <div id="map-single" class="map" data-latlog="[40.714 , -74.005]" data-popuptext="My Location in New York ."></div>
            </div>
            <div class="main_social">
               <span class="main-social-title">Find on:</span>
               <ul>
                  <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
               </ul>
            </div>
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
      