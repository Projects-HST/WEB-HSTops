<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">Achievements</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/ops_achievements/">Achievements</a></li>
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
                        <p class="section-subtitle">Latest Achievements</p>
                        <h2 class="section-title">Achievements</h2>
                    </div>
					
	<div class="home-news-area padding-top-50 padding-bottom-100">
        <div class="container">
            <div class="row">

<?php if (count($result)>0){ 
		$assets_url = $this->config->item("assets_url")."awards/";
		
		foreach($result as $rows){  
			$string = htmlspecialchars_decode(stripslashes($rows['achievement_text_en']));
				
?>
                <div class="col-lg-4">
                    <div class="news-item-style-03">
                        <div class="thumb">
							<img src="<?php echo $assets_url.$rows['achievement_image'];?>" alt="">
                        </div>
                        <div class="content" style="min-height:200px;">
                             <p><?php echo $string; ?></p>
                        </div>
                    </div>
                </div>
<?php }

}
 ?>
            </div>
        </div>
    </div>
	
                </div>
            </div>
        </div>
    </div>
	
