<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title-ta">நிகழ்வுகள்</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>tamil/">முகப்பு /</a></li>
                            <li><a href="<?php echo base_url(); ?>tamil/events/">நிகழ்வுகள்</a></li>
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

    <!-- event box area -->
    <div class="event-box-area margin-top-100">
        <div class="container">
            <div class="row">
                <div class="event-box-wrapper col-lg-12">
                    <div class="title-left-style">
                        <p class="section-subtitle">நிகழ்வுகள்</p>
                        <h2 class="ta_title">அடுத்து நடக்கிறது</h2>
                    </div>
                    <!--<div class="img-wrapper">
                        <img src="<?php echo base_url(); ?>assets/basic/img/event/happen.png" alt="">
                    </div>
                    <div class="event-box-content">
                        <div class="date-box">
                            <span class="date">17</span>
                            <span class="month">Dec</span>
                        </div>
                        <h4>Orphan children's educational campaign</h4>
                        <p>Completely synergize resource taxing relationships via premier niche Professionally cultivate one-to-one customer service with. Completely synergize resource taxing relationships via premier niche Professionally cultivate one-to-one customer service with.</p>
                        <div class="btn-wrapper">
                            <a class="btn btn-custom-primary" href="<?php echo base_url(); ?>index/post_details/">More Details...</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

<?php if (count($result)>0){ 
		$assets_url = $this->config->item("assets_url")."newsfeed/";
?>
    <!-- upcoming area -->
    <div class="upcoming-area">
        <div class="container">
            <div class="row padding-top-20">

				<?php foreach($result as $rows){  
					$string = htmlspecialchars_decode(stripslashes($rows['description_ta']));
					if (strlen($string) > 120) {

						// truncate string
						$stringCut = substr($string, 0, 120);
						$endPoint = strrpos($stringCut, ' ');

						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						$string .= '...';
					}
					
				?>
                <div class="col-lg-6">
                    <div class="upcoming-box">
                        <div class="ub-image">
                             <img src="<?php echo $assets_url.$rows['nf_cover_image'];?>" alt="" style="width:440px;height:225px;">
                        </div>
                        <div class="date-box">
                            <span class="date"><?php echo date("d",strtotime($rows['news_date'])) ?></span>
                            <span class="month"><?php echo date("M",strtotime($rows['news_date']))?></span>
                        </div>
                        <div class="ub-content">
                            <h2 class="ta_title_med"><a href="<?php echo base_url(); ?>tamil/post_details/<?php echo base64_encode($rows['id']*98765); ?>/"><?php echo $rows['title_ta'];?></a></h2>
                        </div>
                    </div>
                </div>
				<?php } ?>

				<div class="col-md-12">
                    <div class="pagination-area d-flex justify-content-center margin-top-50 padding-bottom-50"><?php echo $pagination; ?></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>