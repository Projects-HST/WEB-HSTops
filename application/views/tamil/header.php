<?php $search_value = $this->session->userdata('search'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O.P.S - ஓ.பன்னீர்செல்வம்</title>
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
	
	<!-- jquery -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery-2.2.4.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>assets/basic/js/bootstrap.min.js"></script>
    <!-- magnific popup -->
    <script src="<?php echo base_url(); ?>assets/basic/js/jquery.magnific-popup.js"></script>
    
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
        <form action="<?php echo base_url(); ?>tamil/search_posts/"  method="post" type class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" name="search" id="search" placeholder="தேடல்....." <?php if ($search_value!='') { echo "value='$search_value'"; } ?>>
            </div>
            <button type="submit" name='submit' value='Search' class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <!--sidebar menu start-->
    <div class="sidebar-menu" id="sidebar-menu">
        <button class="sidebar-menu-close"><i class="flaticon-close"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <img src="<?php echo base_url(); ?>assets/basic/img/ops_logo-green.png" alt="logo"/>
            </div>
            <div class="sidemenu-text">
                <p>அஇஅதிமுக-வின் கழக ஒருங்கிணைப்பாளரும், மாண்புமிகு தமிழ்நாடு துணை முதலமைச்சருமான திரு.ஓ பன்னீர்செல்வம் அவர்கள் தமிழ்நாட்டின் மிக முக்கியமான அரசியல் தலைவர் ஆவார்.</p>
            </div>
            <div class="sidebar-contact">
                <h4>தொடர்பு கொள்ள</h4>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Lavaca Street, Suite 2000</li>
                    <li><i class="fa fa-envelope"></i>email@evha.com</li>
                    <li><i class="fa fa-phone"></i>(+880) 172570051</li>
                </ul>
            </div>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
                    <a href="<?php echo base_url(); ?>tamil/"> <img src="<?php echo base_url(); ?>assets/basic/img/ops_web_logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="billatrail_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>/tamil/">முகப்பு</a></li>
						<li class="menu-item-has-children navbar-area-tamil">
                            <a href="#">ஓ.பி.எஸ் பற்றி</a>
                            <ul class="sub-menu">
                                <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/aboutOPS/"><i class="fa fa-long-arrow-right"></i>ஓ.பி.எஸ் பற்றி</a></li>
                                <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/about_party/"><i class="fa fa-long-arrow-right"></i>கட்சி பற்றி</a></li>
                            </ul>
                        </li>
                        <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/posts/">பதிவுகள்</a></li>
                        <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/events/">நிகழ்வுகள்</a></li>
						
                        <li class="menu-item-has-children navbar-area-tamil">
                            <a href="#">கேலரி</a>
                            <ul class="sub-menu">
                                <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/photos/"><i class="fa fa-long-arrow-right"></i>புகைப்படம்</a></li>
                                <li class="navbar-area-tamil"><a href="<?php echo base_url(); ?>tamil/videos/"><i class="fa fa-long-arrow-right"></i>வீடியோ</a></li>
                            </ul>
                        </li>
                        <li class="navbar-area-tamil"><a href="#">உள்நுழை</a></li>
                    </ul>
                </div>
                <div class="nav-right-part">
                    <ul>
						<li class="language" id="language">
                            <select name="language" id="language" class="sel_lang"  onchange="javascript:location.href = this.value;">
								<option value="<?php echo base_url(); ?>">EN</option>
								<option value="<?php echo base_url(); ?>tamil/" selected>TA</option>
							</select>
                        </li>
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