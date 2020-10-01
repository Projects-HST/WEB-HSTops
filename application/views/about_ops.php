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
                <img src="assets/img/logo.png" alt="logo"/>
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

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">About OPS</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/about_ops/">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-icon">
            <i class="flaticon-fireworks"></i>
        </div>
    </div>
    <!-- breadcrumb-area end -->

  

    <!-- politx-content-area start -->
    <div class="politx-content-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">About OPS</p>
                        <h2 class="title">We'll be success when your need fill</h2>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. turnkey applications adipisicing find</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                       
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="image-box-style-05">
                        <img src="<?php echo base_url(); ?>assets/basic/img/organization.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- politx-content-area end -->


	<div class="stories-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stories-thumb mr-4">
                        <img src="<?php echo base_url(); ?>assets/basic/img/stories.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-06">
                        <p class="section-subtitle">Success stories</p>
                        <h2 class="title">Political Career</h2>
                        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elitsed do<br>eiusmod tempor incididunt ut labore</p>
                        <div class="row margin-top-50">
                            <div class="col-md-4">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" data-toggle="tab" href="#home">2001</a></li>
                                    <li><a data-toggle="tab" href="#menu1">2005</a></li>
                                    <li><a data-toggle="tab" href="#menu2">2010</a></li>
                                    <li><a data-toggle="tab" href="#menu3">2016</a></li>
                                    <li><a data-toggle="tab" href="#menu4">2020</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
                                        <h3 class="title margin-bottom-20">Healthcare</h3>
                                        <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex ea Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi.</p>
                                        <div class="btn-wrapper align-self-center margin-top-30">
                                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                                        </div>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                        <h3 class="title margin-bottom-20">Education</h3>
                                        <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex ea Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi.</p>
                                        <div class="btn-wrapper align-self-center margin-top-30">
                                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                                        </div>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3 class="title margin-bottom-20">Foreign policy</h3>
                                        <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex ea Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi.</p>
                                        <div class="btn-wrapper align-self-center margin-top-30">
                                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                                        </div>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                        <h3 class="title margin-bottom-20">Resident</h3>
                                        <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex ea Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi.</p>
                                        <div class="btn-wrapper align-self-center margin-top-30">
                                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                                        </div>
                                    </div>
                                    <div id="menu4" class="tab-pane fade">
                                        <h3 class="title margin-bottom-20">Education</h3>
                                        <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi ut aliquip ex ea Met dolore magna aliqua. Ut enim ad minim veniam exercitation ullamco laboris nisi.</p>
                                        <div class="btn-wrapper align-self-center margin-top-30">
                                            <a class="btn btn-custom-primary" href="#">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
	
	<!-- candidate area start -->
    <div class="candidate-area position-relative">
        <div class="container">
            <div class="row candidate-slider">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="candidate-img">
                                <img src="<?php echo base_url(); ?>assets/basic/img/candidate/1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                            <div class="content-box-style-04">
                                <p class="section-subtitle">Achievement</p>
                                <h2 class="section-title">What people say about party...</h2>
                                <p class="description">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, adip sicing elit, sed do eiusmod incididunt".</p>
                                <span class="name">Dany Qadek</span>
                                <span class="post">Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="candidate-img">
                                <img src="<?php echo base_url(); ?>assets/basic/img/candidate/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                            <div class="content-box-style-04">
                                <p class="section-subtitle">Achievement</p>
                                <h2 class="section-title">What people say about party...</h2>
                                <p class="description">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, adip sicing elit, sed do eiusmod incididunt".</p>
                                <span class="name">Jane Smith</span>
                                <span class="post">Director</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="candidate-img">
                                <img src="<?php echo base_url(); ?>assets/basic/img/candidate/1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                            <div class="content-box-style-04">
                                <p class="section-subtitle">Achievement</p>
                                <h2 class="section-title">What people say about party...</h2>
                                <p class="description">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, adip sicing elit, sed do eiusmod incididunt".</p>
                                <span class="name">Dany Qadek</span>
                                <span class="post">Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- candidate area end -->
	
	
   

    <!-- party-box-area start -->
    <div class="party-box-area padding-bottom-100">
        <div class="container">
            <div class="col-lg-12 party-box-wrapper d-flex flex-lg-row flex-column justify-content-lg-between justify-content-center text-lg-left text-center">
                <div class="party-box-content">
                    <h4>Be the part<br> of our party success....</h4>
                    <p>Met dolore magna aliqua. Ut enim ad minim veniam exercitation</p>
                </div>
                <div class="btn-wrapper align-self-center">
                    <a class="btn btn-custom-primary" href="#">Be a Volunteer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- party-box-area end -->
    
    

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
