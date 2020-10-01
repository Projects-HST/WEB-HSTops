<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O.P.S - Ottakarathevar Panneerselvam</title>
     <!-- favicon -->
     <link rel=icon href=<?php echo base_url(); ?>assets/basic/img/favicon.png sizes="20x20" type="image/png">
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/animate.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/magnific-popup.css">
    <!-- Slick -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/slick.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/slick-theme.css" />
    <!-- nice select -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/nice-select.css">
    <!-- swiper -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/swiper.min.css" />
    <!-- animated css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/animated-slider.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/owl.carousel.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/font-awesome.min.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/flaticon.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/basic/css/responsive.css">
    
</head>
<body>




    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close"><i class="flaticon-close"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="<?php echo base_url(); ?>assets/basic/img/logo.png" alt="logo"/>
            </div>
            <div class="sidemenu-text">
                <p>We believe brand interaction is key in commu- nication. Real inno vations and a positive customer experience are the heart of successful commu- nication.</p>
            </div>
            <div class="sidebar-contact">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Lavaca Street, Suite 2000</li>
                    <li><i class="fa fa-envelope"></i>email@evha.com</li>
                    <li><i class="fa fa-phone"></i>(+880) 172570051</li>
                </ul>
            </div>
            <div class="sidebar-subscribe">
                <input type="text" placeholder="Email">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sidebar menu end-->

    <!-- navbar start -->
    <div class="politix-navbar">
        <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#billatrail_main_menu" 
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/basic/img/ops_web_logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="billatrail_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li class="menu-item-has-children">
                            <a href="#">About</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>index/about_ops/"><i class="fa fa-long-arrow-right"></i>About OPS</a></li>
                                <li><a href="<?php echo base_url(); ?>index/about_party/"><i class="fa fa-long-arrow-right"></i>About Party</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>index/posts/">Posts</a></li>
                        <li><a href="<?php echo base_url(); ?>index/events/">Events</a></li>
						
                        <li class="menu-item-has-children">
                            <a href="#">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>index/photos/"><i class="fa fa-long-arrow-right"></i>Photos</a></li>
                                <li><a href="<?php echo base_url(); ?>index/videos/"><i class="fa fa-long-arrow-right"></i>Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="nav-right-part">
                    <ul>
                        <li class="search" id="search">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </li>
                        <li class="menubar d-none d-lg-block" id="navigation-button">
                            <a><i class="flaticon-menu-button"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner-style-3 banner-bg-1 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 offset-md-2 col-xl-5 offset-xl-2 banner-slider-4">
                    <div class="banner-content-style-3">
                        <h2 class="title" data-animation-in="fadeInLeft">It's our honour to be with you</h2>
                        <p class="description" data-animation-in="fadeInDown">Lorem ipsum dummy text are used in this section so replace your text here. Lorem ipsum dummy lorem ipsum dummy text are used in this section</p>
                        <div class="d-flex margin-top-50">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-white" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-content-style-3">
                        <h2 class="title" data-animation-in="fadeInLeft">Integrity, Prosperity of Country</h2>
                        <p class="description" data-animation-in="fadeInDown">Lorem ipsum dummy text are used in this section so replace your text here. Lorem ipsum dummy lorem ipsum dummy text are used in this section</p>
                        <div class="d-flex margin-top-50">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-white" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-content-style-3">
                        <h2 class="title" data-animation-in="fadeInLeft">We can make our city great again</h2>
                        <p class="description" data-animation-in="fadeInDown">Lorem ipsum dummy text are used in this section so replace your text here. Lorem ipsum dummy lorem ipsum dummy text are used in this section</p>
                        <div class="d-flex margin-top-50">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-white" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner3-social">
            <ul>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
        <!-- video button -->
        <div class="video-btn-style-04">
            <a href="#"><i class="fa fa-play"></i></a>
        </div>
    </div>
    <!-- banner end -->

        
    

    <!-- organization area start -->
    <div class="politx-content-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">About OPS</p>
                        <h2 class="title">Organization for action</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. turnkey incididunt applications<br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                        <div class="btn-wrapper padding-top-30">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>index/about_ops/">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="ab-thumb">
                        <img src="<?php echo base_url(); ?>assets/basic/img/organization.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- organization area end -->

<!-- location area start -->
    <div class="location-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Know more about our<br>Party</h2>
                </div>
            </div>
            <div class="row margin-top-55 margin-bottom-100">
                <div class="col-lg-6">
                    <div class="map-img">
                        <img src="<?php echo base_url(); ?>assets/basic/img/map.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="location-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi nec tortor commodo, malesuada fermentum magna faucibus. Proin fringilla antio. Morbi sodale nisi nec tortor commodo. Lorem ipsum dolor sit amet, adipiscing elit. Morbi sodales nisi nec tortor commodo, malesuada fermentum magna sit amet, consectetur adipiscing elit. In in velit odio. Morbi sodales nisi nec tortor commodo.</p>
                        <div class="btn-wrapper">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>index/about_party/">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location area end -->
	
    <!-- changes area start -->
    <div class="action-soon-area">
        <div class="container">
            <div class="row margin-bottom-45">
                <div class="col-lg-12">
                    <p class="section-subtitle">Need changes on</p>
                    <h2 class="title">Achievements</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 align-self-center">
                    <div class="action-soon-content">
                        <div class="act-img">
                            <img src="<?php echo base_url(); ?>assets/basic/img/action/1.png" alt="">
                        </div>
                        <p class="subtitle">In Economy</p>
                        <h4 class="title">The publicity campaign</h4>
                        <div class="btn-wrapper">
                            <a class="readMore" href="<?php echo base_url(); ?>index/about_ops/">Read more</a> ➝
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 align-self-center">
                    <div class="action-soon-content">
                        <div class="act-img">
                            <img src="<?php echo base_url(); ?>assets/basic/img/action/2.png" alt="">
                        </div>
                        <p class="subtitle">In Citizen life</p>
                        <h4 class="title">Change your life style</h4>
                        <div class="btn-wrapper">
                            <a class="readMore" href="<?php echo base_url(); ?>index/about_ops/">Read more</a> ➝
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 align-self-center">
                    <div class="action-soon-content">
                        <div class="act-img">
                            <img src="<?php echo base_url(); ?>assets/basic/img/action/3.png" alt="">
                        </div>
                        <p class="subtitle">In Medical</p>
                        <h4 class="title">Rebuild health program</h4>
                        <div class="btn-wrapper">
                            <a class="readMore" href="<?php echo base_url(); ?>index/about_ops/">Read more</a> ➝
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- changes area end  -->
    
<!-- events start -->
	<div class="upcoming-events-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="section-subtitle">Events</p>
                    <h2 class="title">Upcoming Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-box-style-07">
                        <div class="d-flex margin-bottom-30">
                            <div class="thumb">
                                <div class="time"> 
                                    <span class="date">28</span> 
                                    <span class="month">Dec</span>
                                </div>
                                <img src="<?php echo base_url(); ?>assets/basic/img/up-event1.png" alt="">
                            </div>

                        </div>
                        <h4 class="title">New Party Leadership Conference</h4>
                        <p>While openness and accountability are usually considere corners tones of a democratic system ballot.</p>
                        <div class="btn-wrapper align-self-center margin-top-30">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>index/post_details/">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-list-style padding-top-50">
                        <div class="event-single-style-01">
                            <div class="d-flex">
                                <div class="time"> 
                                    <span class="date">28</span> 
                                    <span class="month">Dec</span>
                                </div>
                                <div class="content">
                                    <h4><a href="event-details.html">New Party Leadership Conference</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="event-single-style-01">
                            <div class="d-flex">
                                <div class="time"> 
                                    <span class="date">28</span> 
                                    <span class="month">Dec</span>
                                </div>
                                <div class="content">
                                    <h4><a href="event-details.html">New Party Leadership Conference</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapper">
                            <a href="<?php echo base_url(); ?>index/events/">View all events</a> ➝
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- events end -->

    <!-- news area Start -->
    <div class="home-news-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center padding-bottom-40">
                        <h2 class="section-title">Recent Posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-slider swiper-container two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/basic/img/blog/b1.png" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>index/post_details/">OMB and State department officials subpoenaed in House...</a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="#">25 December 2019</a></li>
                                        <li><a href="#">Read 4576</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/basic/img/blog/b2.jpg" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>index/post_details/">DNC raises qualifying thresholds for sixth Democratic debate.</a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="#">23 August 2019</a></li>
                                        <li><a href="#">Read 4576</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/basic/img/blog/b3.jpg" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>index/post_details/">Key chairs call to cancel press conference on</a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="#">20 January 2019</a></li>
                                        <li><a href="#">Read 4576</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/basic/img/blog/b4.jpg" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>index/post_details/">Graham announces resolution House impeachment inquiry</a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="#">10 February 2019</a></li>
                                        <li><a href="#">Read 4576</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo base_url(); ?>assets/basic/img/blog/b2.jpg" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>index/post_details/">Key chairs call to cancel press conference on</a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="#">25 September 2019</a></li>
                                        <li><a href="#">Read 4576</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- news area End -->

    

    <!-- footer area start -->
   <footer class="footer-area footer-style-1 main-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 margin-xlt-80">
						<div class="row">
							<img src="<?php echo base_url(); ?>assets/basic/img/ops_web_logo.png" alt="logo">
							<p style="padding-top:20px;color:#ffffff;">Ottakarathevar Panneerselvam is an Indian politician serving as the 2nd and current Deputy Chief Minister of Tamil Nadu since 21 August 2017. He is the coordinator of All India Anna Dravida Munnetra Kazhagam.</p>
						</div>
                    </div>
                    <div class="col-xl-9 margin-xlt-80">
                        <div class="row">
                            <div class="col-lg-3 col-xl-3 offset-xl-1">
                                <div class="footer-widget widget widget_nav_menu">
                                    <h4 class="widget-title">Follow Us On</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Home</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Donate</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Manifesto</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Members</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Call To Action</a></li>
                                        <li><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Volunteer</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="footer-widget widget">
                                    <h4 class="widget-title">Download Our APP On</h4>
									 <div class="row">
										<div class="col-xl-5"><img src="<?php echo base_url(); ?>assets/basic/img/app_store.png" alt="news"></div>
										<div class="col-xl-5"><img src="<?php echo base_url(); ?>assets/basic/img/playstore.png" alt="news"></div>
									</div>
                                </div>
								<div class="copyright-area-inner copyright-sm margin-top-35">
                                    Copyrights@All rights reserved. Developed by Happy sanz tech</a>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- jquery -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery-2.2.4.min.js"></script>
    <!-- popper -->
    <script src="<?php echo base_url(); ?>assets/basic/js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/basic/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.magnific-popup.js"></script>
    <!-- wow -->
    <script src="<?php echo base_url(); ?>assets/basic/js/wow.min.js"></script>
    <!-- animated slider -->
    <script src="<?php echo base_url(); ?>assets/basic/js/animated-slider.js"></script>
    <!-- nice select -->
    <script src="<?php echo base_url(); ?>assets/basic/js/nice-select.js"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url(); ?>assets/basic/js/owl.carousel.min.js"></script>
    <!-- Slick -->
    <script src="<?php echo base_url(); ?>assets/basic/js/slick.min.js"></script>
    <!-- Slick Animation -->
    <script src="<?php echo base_url(); ?>assets/basic/js/slick-animation.js"></script>
    <!-- counterup -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.counterup.min.js"></script>
    <!-- waypoint -->
    <script src="<?php echo base_url(); ?>assets/basic/js/waypoints.min.js"></script>
    <!-- imageloaded -->
    <script src="<?php echo base_url(); ?>assets/basic/js/imagesloaded.pkgd.min.js"></script>
    <!-- swiper -->
    <script src="<?php echo base_url(); ?>assets/basic/js/swiper.min.js"></script>
    <!-- isotope -->
    <script src="<?php echo base_url(); ?>assets/basic/js/isotope.pkgd.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.classyloader.js"></script>

    <!-- main js -->
    <script src="<?php echo base_url(); ?>assets/basic/js/script.js"></script>
    <script src="<?php echo base_url(); ?>assets/basic/js/main.js"></script>

  
</body>
</html>
