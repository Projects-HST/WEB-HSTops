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
			<?php if (count($eventlist_single)>0){ 
					$assets_url = $this->config->item("assets_url")."newsfeed/";
			?>
            <div class="row">
				<?php foreach($eventlist_single as $rows){  
					
				$string = strip_tags($rows->description_ta);
					if (strlen($string) > 50) {

						// truncate string
						$stringCut = substr($string, 0, 50);
						$endPoint = strrpos($stringCut, ' ');

						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						$string .= '...';
					}
											
				?>
					<div class="col-lg-6">
					<div class="content-box-style-07">
                        <div class="d-flex margin-bottom-30">
                            <div class="thumb">
                                <div class="time"> 
                                    <span class="date"><?php echo date("d",strtotime($rows->news_date)) ?></span> 
                                    <span class="month"><?php echo date("M",strtotime($rows->news_date))?></span>
                                </div>
                                <img src="<?php echo $assets_url.$rows->nf_cover_image;?>" alt="">
                            </div>

                        </div>
                        <h4 class="title"><?php echo $rows->title_en;?></h4>
                        <p><?php echo $string; ?></p>
                        <div class="btn-wrapper align-self-center margin-top-30">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>post_details/<?php echo base64_encode($rows->id*98765); ?>/">Read More..</a>
                        </div>
                    </div>
					</div>
					<?php } ?>
                
				 <div class="col-lg-6">
                    <div class="event-list-style padding-top-50">
					<?php foreach($eventlist_double as $rows){ ?>
					
                        <div class="event-single-style-01">
                            <div class="d-flex">
                                <div class="time"> 
                                    <span class="date"><?php echo date("d",strtotime($rows->news_date)) ?></span> 
                                    <span class="month"><?php echo date("M",strtotime($rows->news_date))?></span>
                                </div>
                                <div class="content">
                                    <h4><a href="<?php echo base_url(); ?>post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo $rows->title_en;?></a></h4>
                                </div>
                            </div>
                        </div>
					<?php } ?>
						 </div>
						 <div class="btn-wrapper">
                            <a href="<?php echo base_url(); ?>events/">View all events</a> ➝
                        </div>
						  </div>                      
                   
						
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
			<?php if (count($postlist)>0){ 
							$assets_url = $this->config->item("assets_url")."newsfeed/";
					?>
                <div class="swiper-slider swiper-container two">
                    <div class="swiper-wrapper">
					
					<?php foreach($postlist as $rows){ ?>
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo $assets_url.$rows->nf_cover_image;?>" alt="news">
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo $rows->title_en;?></a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="<?php echo base_url(); ?>post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo date("d M Y",strtotime($rows->news_date)) ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>post_details/<?php echo base64_encode($rows->id*98765); ?>/">Read <?php echo $rows->view_count; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       <?php } ?>
                       
                       
                       
                    </div>
                    <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
<!-- news area End -->