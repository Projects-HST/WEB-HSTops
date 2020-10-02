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
                        <p class="description">
							<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ }
										echo $rows->personal_life_text_en;
							 } ?>
						</p>
                        <div class="btn-wrapper padding-top-30">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>about_ops/">Learn more</a>
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
                        <p><?php 
							if (count($partyhistory)>0){ 
									foreach($partyhistory as $rows){ }
										echo $rows->party_text_en;
							 } ?></p>
                        <div class="btn-wrapper">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>about_party/">Learn more</a>
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
                            <a class="readMore" href="<?php echo base_url(); ?>about_ops/">Read more</a> ➝
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
                            <a class="readMore" href="<?php echo base_url(); ?>about_ops/">Read more</a> ➝
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
                            <a class="readMore" href="<?php echo base_url(); ?>about_ops/">Read more</a> ➝
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
			<?php if (count($eventlist)>0){ 
					$assets_url = $this->config->item("assets_url")."newsfeed/";
			?>
            <div class="row">
			<?php $i=1; foreach($eventlist as $rows){ ?>
                <div class="col-lg-6">
                    <?php if ($i == 1){ ?>
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
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>post_details/">Read More..</a>
                        </div>
                    </div>
					<?php } ?>
                </div>
                <div class="col-lg-6">
				 <?php if ($i > 1){ ?>
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
				 <?php } ?>
                        <div class="btn-wrapper">
                            <a href="<?php echo base_url(); ?>events/">View all events</a> ➝
                        </div>
                    </div>
                </div>
			<?php } ?>
            </div>
		<?php } ?>
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
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/">OMB and State department officials subpoenaed in House...</a></h4>
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
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/">DNC raises qualifying thresholds for sixth Democratic debate.</a></h4>
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
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/">Key chairs call to cancel press conference on</a></h4>
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
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/">Graham announces resolution House impeachment inquiry</a></h4>
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
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/">Key chairs call to cancel press conference on</a></h4>
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