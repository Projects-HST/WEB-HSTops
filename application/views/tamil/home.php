<!-- banner start -->
    <div class="banner-style-3 banner-bg-1 d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 offset-md-1 offset-xl-1 banner-slider-4">
                    <div class="banner-content-style-3">
					  <h2 class="title" data-animation-in="fadeInLeft" style="font-size:40px;line-height:30px;color:#0B9421;text-decoration-line: underline;text-decoration-thickness: 2px;">Title 1</h2>
					   <p data-animation-in="fadeInLeft" style="color:#0B9421;font-weight:bold;">தமிழக அரசியல் வரலாற்றில் தொடர்ந்து 10 முறை நிதி தாக்கல் செய்த சிறப்பிற்குரியவர்.</p>
					   
                        <div class="d-flex margin-top-10">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-green" href="<?php echo base_url(); ?>tamil/ops_achievements/">மேலும்</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-content-style-3">
						<h2 class="title" data-animation-in="fadeInDown" style="font-size:40px;line-height:30px;color:#0B9421;">Title 2</h2>
                        <p data-animation-in="fadeInDown" style="color:#0B9421;font-weight:bold;">அனைவருக்கும் வீடு திட்டத்தின் கீழ் ரூ.27,080 கோடியில் 5,93,341 குடியிருப்புகள் கட்டித் தரப்பட்டுள்ளன..</p>
                        <div class="d-flex margin-top-10">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-green" href="<?php echo base_url(); ?>tamil/ops_achievements/">மேலும்</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-content-style-3">
					<h2 class="title" data-animation-in="fadeInDown" style="font-size:40px;line-height:30px;color:#0B9421;">Title 3</h2>
                        <p data-animation-in="fadeInLeft" style="color:#0B9421;font-weight:bold;">ஜல்லிக்கட்டிற்கான தடையை நீக்கி அவசரசட்டம் மூலம் நிரந்தரத்தீர்வு கண்டுள்ளார்.</h2>
                        <div class="d-flex margin-top-10">
                            <div class="btn-wrapper" data-animation-in="fadeInDown">
                                <a class="btn btn-custom-green" href="<?php echo base_url(); ?>tamil/ops_achievements/">மேலும்</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner3-social">
            <ul>
                <li><a href="https://www.facebook.com/OfficeOfOPS/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/OfficeOfOPS/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/officeof_ops/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<li><a href="https://www.linkedin.com/in/panneerselvam-o-033762192/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
                        <p class="section-subtitle">ஓ.பி.எஸ் பற்றி</p>
                        <h2 class="ta_title">தமிழக துணை முதல்வர்</h2>
                        <p class="description">
						<?php
						if (count($personal)>0){
							 foreach($personal as $rows){
								$string = htmlspecialchars_decode(stripslashes($rows->personal_life_text_ta));
								if (strlen($string) > 1000) {

									// truncate string
									$stringCut = substr($string, 0, 1000);
									$endPoint = strrpos($stringCut, ' ');

									//if the string doesn't contain any space then it will cut without word basis.
									$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
									$string .= '...';
								}
							 }
								echo $string;
							 } ?>
						</p>
                        <div class="btn-wrapper padding-top-30">
                            <a class="btn btn-custom-primary-ta" href="<?php echo base_url(); ?>tamil/aboutOPS/">மேலும்</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="ab-thumb">
                        <img src="<?php echo base_url(); ?>assets/basic/img/ops_home_img.jpg" alt="">
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
                    <h2 class="ta_title">அனைத்திந்திய <br>அண்ணா திராவிட முன்னேற்றக் கழகம்</h2>
                </div>
            </div>
            <div class="row margin-top-55 margin-bottom-100">
                <div class="col-lg-6">
                    <div class="map-img">
                        <img src="<?php echo base_url(); ?>assets/basic/img/home_party_logo.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="location-content">
                        <p>
						<?php
						if (count($partyhistory)>0){
							 foreach($partyhistory as $rows){
								$string = htmlspecialchars_decode(stripslashes($rows->party_text_ta));
								if (strlen($string) > 1000) {

									// truncate string
									$stringCut = substr($string, 0, 1000);
									$endPoint = strrpos($stringCut, ' ');

									//if the string doesn't contain any space then it will cut without word basis.
									$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
									$string .= '...';
								}
							 }
								echo $string;
							 } ?>
						</p>
                        <div class="btn-wrapper">
                            <a class="btn btn-custom-primary-ta" href="<?php echo base_url(); ?>tamil/about_party/">மேலும்</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location area end -->

	<?php if (count($achievements)>0){
				$assets_url = $this->config->item("assets_url")."awards/";
	?>
    <!-- changes area start -->
    <div class="action-soon-area padding-bottom-100">
        <div class="container">
            <div class="row margin-bottom-45">
                <div class="col-lg-12">
                    <p class="section-subtitle">ஓ.பி.எஸ் சாதனைகள்</p>
                    <h2 class="ta_title">சாதனைகள்</h2>
                </div>
            </div>
            <div class="row">
			<?php foreach($achievements as $rows){ ?>

                <div class="col-xl-4 col-lg-6 align-self-center">
                    <div class="action-soon-content">
                        <div class="act-img">
                            <img src="<?php echo $assets_url.$rows->achievement_image;?>" alt="">
                        </div>
                        <p class="subtitle">சாதனைகள்</p>
                        <h4 class="ta_title_med"><?php echo $rows->achievement_title_ta;?></h4>
                        <div class="btn-wrapper">
                            <!--<a class="readMoreta" href="<?php echo base_url(); ?>tamil/achievement_details/<?php echo base64_encode($rows->id*98765); ?>/">மேலும்</a> ➝-->
							<a class="readMoreta" href="<?php echo base_url(); ?>tamil/ops_achievements/" target="_blank">மேலும்</a> ➝
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
	 <?php } ?>
<!-- changes area end  -->


<?php if (count($eventlist_single)>0){
		$assets_url = $this->config->item("assets_url")."newsfeed/";
?>
<!-- events start -->
	<div class="upcoming-events-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="section-subtitle">நிகழ்வுகள்</p>
                    <h2 class="ta_title">எதிர்வரும் நிகழ்வுகள்</h2>
                </div>
            </div>

            <div class="row">
				<?php foreach($eventlist_single as $rows){
					$string = htmlspecialchars_decode(stripslashes($rows->description_ta));
					if (strlen($string) > 400) {

						// truncate string
						$stringCut = substr($string, 0, 400);
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
                                <img src="<?php echo $assets_url.$rows->nf_cover_image;?>" alt="" width="150" height="150">
                            </div>

                        </div>
                        <h2 class="ta_title_med"><?php echo $rows->title_ta;?></h4>
                        <p><?php echo $string; ?></p>
                        <div class="btn-wrapper align-self-center margin-top-30">
                            <a class="btn btn-custom-primary-ta" href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows->id*98765); ?>/">மேலும்..</a>
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
                                    <h2 class="ta_title_med"><a href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo $rows->title_ta;?></a></h4>
                                </div>
                            </div>
                        </div>
					<?php } ?>
						 </div>
						 <div class="btn-wrapper">
                            <a href="<?php echo base_url(); ?>tamil/events/">அனைத்து நிகழ்வுகளும்</a> ➝
                        </div>
						  </div>


            </div>

        </div>
    </div>
	<!-- events end -->
<?php } ?>

<?php if (count($postlist)>0){
		$assets_url = $this->config->item("assets_url")."newsfeed/";
?>
    <!-- news area Start -->
    <div class="home-news-area padding-top-50 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center padding-bottom-40">
                        <h2 class="ta_title">சமீபத்திய பதிவுகள்</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-slider swiper-container two">
                    <div class="swiper-wrapper">

					<?php foreach($postlist as $rows){ ?>
                        <div class="swiper-slide image-overlay">
                            <div class="news-item-style-03">
                                <div class="thumb">
                                    <img src="<?php echo $assets_url.$rows->nf_cover_image;?>" style="max-width:350px;">
                                </div>
                                <div class="content">
									<h4 class="ta_title_med"><a href="<?php echo base_url(); ?>tamil/posts" target="_blank"><?php echo $rows->title_ta;?></a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="<?php echo base_url(); ?>tamil/posts" target="_blank"><?php echo date("d M Y",strtotime($rows->news_date)) ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>tamil/posts" target="_blank">வாசிப்பு  <?php echo $rows->view_count; ?></a></li>
                                    </ul>
                                    <!--<h4 class="ta_title_med"><a href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo $rows->title_ta;?></a></h4>
                                    <ul class="blog-meta d-flex flex-column flex-lg-row">
                                        <li><a href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows->id*98765); ?>/"><?php echo date("d M Y",strtotime($rows->news_date)) ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows->id*98765); ?>/">வாசிப்பு  <?php echo $rows->view_count; ?></a></li>
                                    </ul>-->
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

            </div>
        </div>
    </div>
<!-- news area End -->
<?php } ?>

<?php if (count($introvideo)>0){
		foreach($introvideo as $rows){ }
?>

<script>
$(".video-btn-style-04").magnificPopup({
            items: {
                src: "https://www.youtube.com/watch?v=<?php echo $rows->video_url; ?>"
            },
            type: "iframe",
            iframe: {
                markup:
                    '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    "</div>",
                patterns: {
                    youtube: {
                        index: "youtube.com/",
                        id: "v=",
                        src: "https://www.youtube.com/embed/<?php echo $rows->video_url; ?>"
                    }
                },
                srcAction: "iframe_src"
            }
        });
 </script>
<?php } ?>
