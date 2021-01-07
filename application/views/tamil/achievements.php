<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">சாதனைகள்</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">முகப்பு /</a></li>
                            <li><a href="<?php echo base_url(); ?>/tamil/ops_achievements/">ஓ.பி.எஸ் சாதனைகள்</a></li>
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
                        <p class="section-subtitle">சமீபத்திய சாதனைகள்</p>
                        <h2 class="section-title">சாதனைகள்</h2>
                    </div>

	<div class="home-news-area padding-bottom-100">
        <div class="container">
            <div class="row">

<?php if (count($result)>0){ 
		$assets_url = $this->config->item("assets_url")."awards/";
		
		foreach($result as $rows){  
			$string = htmlspecialchars_decode(stripslashes($rows['achievement_text_en']));
			$yrdata= strtotime($rows['achievement_date']);
				
?>
                <div class="col-lg-4 padding-top-50 ">
                    <div class="news-item-style-03">
                        <div class="thumb">
							<img src="<?php echo $assets_url.$rows['achievement_image'];?>" alt="">
                        </div>
                        <div class="content" style="min-height:200px;">
							<h4 class="ta_title_med"><a href="<?php echo base_url(); ?>tamil/achievement_details/<?php echo base64_encode($rows['id']*98765); ?>/"><?php echo $rows['achievement_title_ta'];?></a></h4>
                             <ul class="blog-meta d-flex flex-column flex-lg-row">
                                <li><a href="<?php echo base_url(); ?>tamil/achievement_details/<?php echo base64_encode($rows['id']*98765); ?>/"><?php echo date('d F Y', $yrdata); ?></a></li>
                                <li><a href="<?php echo base_url(); ?>tamil/achievement_details/<?php echo base64_encode($rows['id']*98765); ?>/">மேலும்</a></li>
                            </ul>
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
	
