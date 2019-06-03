@extends('master')

@section('main_content')


<!-- =================== MODAL : END ============================== -->
<div class="content">
<!-- =================== SECTION - HERO ============================ -->
   
   <div id="hero">
       <div id="owl-main" class="owl-carousel home-page-carousel height-lg owl-inner-nav owl-ui-lg owl-theme">
           <div class="item" style="background-image: url(lib/pshopme/PHP/assets/images/sliders/main-banner2.png);">
               <div class="container">
                   <div class="caption vertical-center text-center">
                   </div><!-- /.caption --> 
               </div><!-- /.container --> 
           </div><!-- /.item -->

           <div class="item" style="background-image: url(lib/pshopme/PHP/assets/images/sliders/main-banner.png);">
               <div class="container">
                   <div class="caption vertical-center text-center">
                   </div><!-- /.caption -->   
               </div><!-- /.container --> 
           </div><!-- /.item -->
           

       </div><!-- /.owl-carousel -->
   </div><!-- /#hero -->
   
<!-- ===================== SECTION – HERO : END ====================== -->
   <div class="container">
       <div class="page-section block-reinsurance wow fadeInUp">
           <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-6 reinsurance-item">
                   <div class="text-center reinsurance-image-container">
                       <span>
                       <img width="90px" src="{{asset('/svg/shipping.svg')}}" alt="">
                       </span>
                   </div><!-- /.text-center -->
                   <p class="reinsurance-text">
                       <span class="first">Free</span> <span class="second">Shipping</span>
                   </p><!-- /.reinsurance-text -->
               </div><!-- /.col -->

               <div class="col-md-3 col-sm-3 col-xs-6 reinsurance-item">
                   <div class="text-center reinsurance-image-container">
                        <span>
                                <img width="90px" src="{{asset('/svg/customize.svg')}}" alt="">
                                </span>
                   </div><!-- /.text-center -->
                   <p class="reinsurance-text">
                       <span class="first">Easy</span> <span class="second">Customize</span>
                   </p><!-- /.reinsurance-text -->
               </div><!-- /.col -->

               <div class="col-md-3 col-sm-3 col-xs-6 reinsurance-item">
                   <div class="text-center reinsurance-image-container">
                        <span>
                                <img width="90px" src="{{asset('/svg/takecare.svg')}}" alt="">
                                </span>
                   </div><!-- /.text-center -->
                   <p class="reinsurance-text">
                       <span class="first">Easy</span> <span class="second">Takecare</span>
                   </p><!-- /.reinsurance-text -->
               </div><!-- /.col -->

               <div class="col-md-3 col-sm-3 col-xs-6 reinsurance-item">
                   <div class="text-center reinsurance-image-container">
                        <span>
                                <img width="90px" src="{{asset('/svg/support.svg')}}" alt="">
                                </span>
                   </div><!-- /.text-center -->
                   <p class="reinsurance-text">
                       <span class="first">Lifetime</span> <span class="second">Support</span>
                   </p><!-- /.reinsurance-text -->
               </div><!-- /.col -->
   
           </div><!-- /.row -->		
       </div><!-- /.page-section -->

       <div class="row">
           <div class="col-md-4 wow fadeInUp">
               <div class="page-section testimonials-section">
                   <h3 class="section-title text-md-center">Testimonials</h3>
                   <ul class="list-unstyled list-testimonials">
                       <li>
                           <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</blockquote>
                           <p class="quoter"><span class="name">Kidesigner</span> &ndash; <span class="designation">Web Designer</span></p>
                       </li>
                       <li>
                           <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</blockquote>
                           <p class="quoter"><span class="name">Kidesigner</span> &ndash; <span class="designation">Web Designer</span></p>
                       </li>
                       <li>
                           <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</blockquote>
                           <p class="quoter"><span class="name">Kidesigner</span> &ndash; <span class="designation">Web Designer</span></p>
                       </li>
                   </ul><!-- /.list-testimonials -->
               </div><!-- /.page-section -->			
           </div><!-- /.col -->

           <div class="col-md-8 wow fadeInUp">
               <div class="page-section videos-section">
                   <div class="section-header">
                       <a href="#" class="pull-right hidden-xs hidden-sm">More Videos</a>
                       <h3 class="section-title text-md-center">Videos</h3>
                   </div><!-- /.section-header-->
                <iframe id="video-player" class="video-player full-width" style="border:0px;" width="685" height="385" src="{{asset('/video/dracula.mp4')}}"></iframe>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
               </div><!-- /.page-section-->			
           </div><!-- /.col -->
       </div><!-- /.row -->
   </div><!-- /.container -->
</div><!-- /.content -->
    
@endsection