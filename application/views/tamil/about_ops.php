<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">ஓ.பி.எஸ் பற்றி</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>tamil/">முகப்பு /</a></li>
                            <li><a href="<?php echo base_url(); ?>tamil/about_ops/">About</a></li>
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
                        <p class="section-subtitle">ஓ.பி.எஸ் பற்றி</p>
                        <h3>தமிழக துணை முதல்வர்</h3>
                        <p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ 
											$string = htmlspecialchars_decode(stripslashes($rows->personal_life_text_ta));
									}
							echo $string;
						} ?>
						</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="image-box-style-05">
                        <img src="<?php echo base_url(); ?>assets/basic/img/ops_home_img.jpg" alt="">
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
                        <img src="<?php echo base_url(); ?>assets/basic/img/political_career.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">வெற்றிக் கதைகள்</p>
                        <h3>அரசியல் வாழ்க்கை</h3>
						<p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ }
										echo htmlspecialchars_decode(stripslashes($rows->political_career_text_ta));
						} ?>
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<?php if (count($achievements)>0){ 
		$assets_url = $this->config->item("assets_url")."awards/";
?>
	<!-- candidate area start -->
    <div class="candidate-area position-relative padding-bottom-100">
        <div class="container">
            <div class="row candidate-slider">
			<?php foreach($achievements as $rows){ 
				$string = htmlspecialchars_decode(stripslashes($rows->achievement_text_ta));
				
					if (strlen($string) > 300) {

						// truncate string
						$stringCut = substr($string, 0, 300);
						$endPoint = strrpos($stringCut, ' ');

						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						$string .= '...';
					}
			
			?>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="candidate-img">
                                <img src="<?php echo $assets_url.$rows->achievement_image;?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content-box-style-04">
                                <p class="section-subtitle">சாதனைகள்</p>
                                <h2 class="section-title" style="font-size:35px;line-height:30px;"><?php echo $rows->achievement_title_ta;?></h2>
                                <p class="description"><?php echo $string; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
			<?php } ?>
            </div>
        </div>
    </div>
    <!-- candidate area end -->
<?php } ?>
    