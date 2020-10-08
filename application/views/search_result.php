<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">Search</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Search /</a></li>
                            <li><a href="<?php echo base_url(); ?>">Search Result</a></li>
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
                        <p class="section-subtitle">Search</p>
                        <h2 class="section-title">Search Result</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
<?php if (count($result)>0){ 
		$assets_url = $this->config->item("assets_url")."newsfeed/";
?>

    <div class="blog-area padding-bottom-100">
        <div class="container">
            <div class="row blog-no-sidebar">
                <div class="col-lg-8 offset-lg-4">

				<?php foreach($result as $rows){  
					$category_id = $rows['nf_category_id'];
					$string = htmlspecialchars_decode(stripslashes($rows['description_en']));
					if (strlen($string) > 120) {

						// truncate string
						$stringCut = substr($string, 0, 120);
						$endPoint = strrpos($stringCut, ' ');

						//if the string doesn't contain any space then it will cut without word basis.
						$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
						$string .= '...';
					}
					
				?>
                    <div class="blog-item-style-02 margin-top-120">
                        <div class="b-img" style="width:500px;height:300px;">
                            <img src="<?php echo $assets_url.$rows['nf_cover_image'];?>" alt="">
                        </div>
                        <div class="b-content">
						<span class="causes-tag mr-3">
						<?php if ($category_id == '2'){ ?>
							<a href="<?php echo base_url(); ?>posts/">Posts</a>
						<?php } ?>
						<?php if ($category_id == '3'){ ?>
							<a href="<?php echo base_url(); ?>events/">Events</a>
						<?php } ?>
						</span>
                            <div class="blog-date-box">
                                <h4><?php echo date("d",strtotime($rows['news_date'])) ?><br><span><?php echo date("M",strtotime($rows['news_date']))?></span></h4>
                            </div>
                            <h4 class="section-title"><a href="<?php echo base_url(); ?>index/post_details/<?php echo base64_encode($rows['id']*98765); ?>/"><?php echo $rows['title_en'];?></a></h4>
                            <p><?php echo $string; ?></p>
                        </div>
                        
                        <div class="blog-meta d-flex flex-column flex-lg-row">
                            <div class="blog-social-share d-flex mr-4">
                                <span>Share</span>
                                <ul>
                                    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-wrapper">
                                <a href="<?php echo base_url(); ?>index/post_details/<?php echo base64_encode($rows['id']*98765); ?>/">Read more</a> ➝
                            </div>
                        </div>
                    </div>
				<?php } ?>
				
                </div>
                <div class="col-md-12">
                    <div class="pagination-area d-flex justify-content-center margin-top-50 padding-bottom-50"><?php echo $pagination; ?></div>
                </div>
            </div>
        </div>
    </div>
  <?php } else { ?>
  
   <div class="blog-area padding-bottom-100">
        <div class="container padding-top-50">
            <h4 style="text-align: center;">Sorry!.. No Results Found.</h4>
			
		</div>
	</div>
<?php }?>